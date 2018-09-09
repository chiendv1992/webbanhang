<?php

namespace App\Http\Controllers;

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

class FrontendController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
        $pecialproduct = Product::orderBy('id', 'desc')->take(4)->get();
        View::share('categories',$categories);
        View::share('pecialproduct',$pecialproduct);
    }


    public function index()
    {
        $content = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $shiping = 40000;

//        dd($content);
        $clientssay = Product::take(5)->get();
        $bestseller = Product::take(3)->get();
        $hotsale = Product::take(3)->get();
        $lastnew = Product::take(5)->get();
        $arrival = Product::take(8)->get();
        $banner = Banner::all();
        $hotdeals = Product::orderBy('id', 'desc')->take(4)->get();
        $featured = Product::orderBy('id', 'asc')->take(8)->get();
        $brands = Product::orderBy('id', 'asc')->take(10)->get();
        return view('frontend.index',
            [
                'banner'=>$banner,
                'arrival'=>$arrival,
                'hotdeals'=>$hotdeals,
                'featured'=>$featured,
                'lastnew'=>$lastnew,
                'clientssay'=>$clientssay,
                'bestseller'=>$bestseller,
                'hotsale'=>$hotsale,
                'brands'=>$brands,
                'content'=>$content,
                'total'=>$total,
                'subtotal'=>$subtotal,
                'shiping'=>$shiping,
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
        $productdetail = Product::find($id);
        return view('frontend.detail',
            [
                'productdetail'=> $productdetail,
                'images'=> $images,
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
        Cart::setTax($rowId, 0);
//        dd($content);
        return redirect()->route('card',['content'=>$content]);
//

    }
    public function card()
    {
        $content = Cart::content();
        $subtotal = Cart::subtotal();
        $total = Cart::total();

        return view('frontend.card',['content'=>$content,'subtotal'=>$subtotal,'total'=>$total]);

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
    return redirect()->back();

    }
    public function deletecard($id)
    {
        Cart::remove($id);
        return redirect()->route('card')->with('success','Order Success');
    }

}
