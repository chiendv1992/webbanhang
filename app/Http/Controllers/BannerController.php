<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view('backend.banner.index',['banner'=>$banner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name ='';
        // lấy tên cua image
        $file_name = $request->file('image')->getClientOriginalName();
//        dd($file_name);
        // cop ảnh luu vao ht
        $image = $request->file('image')->move('upload/images/banner/',$file_name);
        $banner = new Banner();
        $banner->title = $request->title;
        $banner->images = $file_name;
        $banner->status =$request->status;
        $banner->save();
        return redirect('banner/list')->with('success','You Save Image Banner Success !!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner=Banner::find($id);
        $banner->delete($id);
        return redirect('/banner/list')->with('success','You Deleted Banner Successfully !!');
    }
}
