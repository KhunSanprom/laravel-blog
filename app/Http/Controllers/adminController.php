<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    function index(){
        $blogs = DB::table('blogs')->get();
        return view('blog',compact('blogs'));
    }

    function create_blog(){
        return view('form');
    }

    function insert(Request $request){
        $request->validate([
            'title'=>'required|max:50',
            'content'=>'required'
        ],[
            'title.required'=>'Please enter the blog title.',
            'title.max'=>'The title not more than 50 character',
            'content'=>'Pleasr enter the blog content'
        ]);
        $data=[
            'title'=>$request->title,
            'content'=>$request->content
        ];
        DB::table('blogs')->insert($data);
        return redirect('/blog');
    }

    function delete($id){
        DB::table('blogs')->where('id',$id)->delete();
        return redirect('/blog');
    }

    function statusChange($id){
        $blog= DB::table('blogs')->where('id',$id)->first();
        $data=[
            'status'=>!$blog->status
        ];

        $blog=DB::table('blogs')->where('id',$id)->update($data);
        return redirect('/blog');
    }

    function edit($id){
        $blog= DB::table('blogs')->where('id',$id)->first();
        return view('edit',compact('blog'));
    }
}
