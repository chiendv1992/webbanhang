<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Comment;
use App\Http\Requests\Contact\AddContactRequest;


class ContactController extends Controller
{

    public function index()
    {
        $coments = Comment::all();
        return view('backend.contact.index',['coments'=>$coments]);
    }

    public function create()
    {
        return view('frontend.contact');
    }

    public function store(AddContactRequest $request)
    {
        die();
        $comment = new Comment();
        $comment->customer->name=$request->name;
        $comment->customer->address=$request->address;
        $comment->customer->phone=$request->phone;
        $comment->customer->gender=$request->gender;

        $comment->save();
        return redirect()->route('contact')->with('success','You Send Message Success !!');

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('backend.banner.edit',['banner'=>$banner]);
    }
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
