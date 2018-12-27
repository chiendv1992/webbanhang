<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontend\RegisterRequests;
use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;
use App\Model\Image;
use App\Model\Banner;
use App\Model\Order;
use App\Model\Orderdetail;
use App\Model\Customer;
use Illuminate\Support\Facades\View;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;
use App\Http\Requests\Card\CheckoutRequest;
use App\Http\Requests\Contact\AddContactRequest;
use App\Model\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class FrontendController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
        $pecialproduct = Product::orderBy('id', 'desc')->take(4)->get();
        $top = Product::orderBy('id', 'desc')->take(4)->get();
        $brands = Product::orderBy('id', 'asc')->take(10)->get();

        View::share('categories',$categories);
        View::share('pecialproduct',$pecialproduct);
        View::share('top',$top);
        View::share('brands',$brands);



    }
    public function index()
    {
        $clientssay = Product::take(5)->get();
        $bestseller = Product::take(3)->get();
        $hotsale = Product::take(3)->get();
        $lastnew = Product::take(5)->get();
        $arrival = Product::take(8)->get();
        $banner = Banner::all();
        $hotdeals = Product::orderBy('id', 'desc')->take(4)->get();
        $featured = Product::orderBy('id', 'asc')->take(8)->get();

        return view('frontend.index',
            [
                'banner'=>$banner,
                'arrival'=>$arrival,
                'hotdeals'=>$hotdeals,
                'featured'=>$featured,
                'lastnew'=>$lastnew,
                'clientssay'=>$clientssay,
                'bestseller'=>$bestseller,
                'hotsale'=>$hotsale
             ]);
    }
    public function grid($id)
    {
        $cate = Category::find($id);
        $product = Product::paginate(12);
        return view('frontend.productgrid',['cate'=>$cate, 'product'=>$product]);
    }
    public function detail($id)
    {
        $images = Image::all();
        $usell = Product::take(8)->get();
        $related = Product::take(5)->get();
        $productdetail = Product::find($id);
        return view('frontend.detail',
            [
                'productdetail'=> $productdetail,
                'images'=> $images,
                'usell'=>$usell,
                'related'=>$related
            ]);
    }
    public function purchase($id)
    {
        $product_buy = Product::where('id',$id)->first();
        Cart::add([
            'id' => $id,
            'name' => $product_buy->name,
            'price' => $product_buy->price - ($product_buy->price*$product_buy->sale)/100,
            'qty' => 1,
            'options'=> array(
                'img' => $product_buy->image,
                'sale' => $product_buy->sale,
                'priceold' => $product_buy->price
            )
        ]);
        $content = Cart::content();
        $rowId = $content->where('id', $id)->first()->rowId;
        View::share('content',$content);
        Cart::setTax($rowId, 0);
//        dd($content);
        return redirect()->route('card');
//

    }
    public function card()
    {
        $content = Cart::content();
        $subtotal = Cart::subtotal();
        $total = Cart::total();
        View::share('content',$content);
        return view('frontend.card',['subtotal'=>$subtotal,'total'=>$total]);

    }
    public function postcard(CheckoutRequest $request)
    {
        $content = Cart::content();
        $total = Cart::total();
//        dd($content);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->gender = $request->gender;
        $customer->status = 0;
        $customer->save();

        $orders = new Order();
        $orders ->customer_id = $customer->id;
        $orders ->date_orders = date('Y-m-d');
        $orders ->total = 11;
        $orders ->status = 1;
        $orders ->type = $request->payment;
        $orders ->save();

        foreach ($content as $key => $value)
        {
            $orders_detail = new Orderdetail();
            $orders_detail -> order_id = $orders ->id;
            $orders_detail -> product_id = $value ->id;
            $orders_detail -> qty = $value ->qty;
            $orders_detail -> price_unit = $value ->price;

            $orders_detail -> save();
        }
        Cart::destroy();
    return redirect()->back()->with('success','Order Success');

    }
    public function deletecard($id)
    {
        Cart::remove($id);
        return redirect()->route('card');
    }
    public function updatecart(Request $request,$id)
    {
        $update = Cart::find($id);
        $rowid = $request->row;
        Cart::get($rowid);
        dd(Cart::get($rowid));
        $update->qty = $request->qty;
        Cart::update($update->rowid,$update->qty);
        return redirect()->route('card');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function storecontact(AddContactRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->gender = $request->gender;
        $customer->status = 1;
        $customer->save();

        $comment = new Comment();
        $comment->content = $request->contents;
        $comment->customer_id = $customer->id;
        $comment->status = 1;

        $comment->save();
        return redirect()->route('contact')->with('success','You Send Message Success !!');

    }

    public function getsearch()
    {
         return view('frontend.search');
    }

    public function search(Request $request)
    {
        $cate = Category::all();
        $product = new Product();
        $search = $request->search;
        $data = Product::where('name','like',"%$search%")->paginate(10);
        return view('frontend.search', ['data'=>$data, 'cate'=>$cate]);
    }

    public function getregister()
    {
        return view ('frontend.register');
    }

    public function postregister(RegisterRequests $request)
    {

        $users = new User();

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->level = 0;
        $users->save();

        return redirect('/registration')->with('success','You Register Success !!!');
    }

    public function getLogin()
    {
        return view('frontend.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 0
        ];
        if (Auth::attempt($login))
        {
            return redirect('/');
        }
        else
        {
            return redirect()->back()->with('err','Login Unsuccessful');
        }

    }
    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }
}
