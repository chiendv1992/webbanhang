<?php

namespace App\Http\Controllers;

use App\Model\Image;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use App\Http\Requests\Product\AddRequest;
use App\Http\Requests\Product\EditRequest;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('backend.product.index',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
//        dd($category);
        return view('backend.product.add', ['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $file_name ='';
        // lấy tên cua image
        $file_name = $request->file('image')->getClientOriginalName();
//        dd($file_name);
        // cop ảnh luu vao ht
        $image = $request->file('image')->move('upload/image/product/',$file_name);
        $product = new Product();

        $product->cate_id = $request->category;
        $product->name = $request->name;
        $product->code = $request->code;
        $product->content = $request->contents;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->tosale = $request->tosale;
        $product->fromsale = $request->fromsale;
        $product->image = $file_name;
        $product->qty = $request->qty;
        $product->status = $request->status;
        $product->save();
        $product_id= $product->id;
        // detail image

        if ($request->hasFile('images'))
        {

            foreach ($request->file('images') as $file)
            {
                $images = new Image();
                if(isset($file))
                {
                    $images->images=$file->getClientOriginalName();
                    $images->product_id=$product_id;
                    $file->move('upload/images/product/detail/',$images->images);
                    $images->save();
                }
            }
        }

        return redirect('product/list')->with('success','You Save Product Success !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image= Image::all();
        $product = Product::find($id);
        return view('backend.product.show',['product'=>$product,'image'=>$image]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::All();
        $product=Product::find($id);
        $image=Product::find($id)->image;
        return view('backend.product.edit',['product'=>$product,'category'=>$category,'image'=>$image]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {

        $product=Product::find($id);
        $img_curr='upload/images/product/'.$request->input('img_curr');
        if (!empty($request->file('images')))
        {
            $file_name = $request->file('images')->getClientOriginalName();
            $product->image=$file_name;
            $request->file('images')->move('upload/images/product/',$file_name);
            if (File::exists($img_curr)) {
                File::delete($img_curr);
            }
        }

        $product =  Product::find($id);
        $product->cate_id = $request->category;
        $product->name = $request->name;
        $product->code = $request->code;
        $product->content = $request->contents;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->tosale = $request->tosale;
        $product->fromsale = $request->fromsale;
        $product->image = $file_name;
        $product->qty = $request->qty;
        $product->status = $request->status;
        $product->save();
        return redirect('/product/list')->with('success','You Edit Success !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete($id);
        return redirect('/product/list')->with('success','You Deleted Successfully !!');
    }
}
