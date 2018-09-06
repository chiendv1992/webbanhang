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
        $arrival = Product::take(8)->get();
        $banner = Banner::all();
        return view('frontend.index',['banner'=>$banner,'arrival'=>$arrival]);
    }
    public function grid($id)
    {
        $cate = Category::find($id);
        $product = Product::paginate(12);
        return view('frontend.productgrid',['cate'=>$cate, 'product'=>$product]);
    }

}
