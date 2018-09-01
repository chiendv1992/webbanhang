<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Subcategory;
use App\Model\Category;
use App\Http\Requests\Subcategory\EditRequest;
use App\Http\Requests\Subcategory\AddRequest;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = Subcategory::all();
//        dd($subcategory);
        return view('backend.subcategory.index', ['subcategory'=>$subcategory]);
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
        return view('backend.subcategory.add',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $subcategory = new Subcategory();
//        dd($subcategory);
        $subcategory->name = $request->name;
        $subcategory->status = $request->status;
        $subcategory->cate_id = $request->category;
        $subcategory->save();
        return redirect()->route('admin.subcategory.list')->with('susscess','You Add Success !!');
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
        $category = Category::all();
        $subcategory = Subcategory::find($id);
        return view('backend.subcategory.edit',['subcategory'=>$subcategory,'category'=>$category]);
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
       $subcate = Subcategory::find($id);
       $subcate->name = $request->name;
       $subcate->status = $request->status;
       $subcate->cate_id = $request->category;
       $subcate->save();
       return redirect()->route('admin.subcategory.list')->with('success','You Edit Subcategory Success !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory=Subcategory::find($id);
        $subcategory->delete($id);
        return redirect('subcategory/list')->with('success','You Deleted Successfully !!');
    }
}
