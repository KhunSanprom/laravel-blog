<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
        $blogs=[
            [
                'title'=>"Blog 1",
                'content' => "Content 1",
                'status' => true
            ],
            [
                'title'=>"Blog 2",
                'content' => "Content 2",
                'status' => true
            ],
            [
                'title'=>"Blog 3",
                'content' => "Content 3",
                'status' => false
            ],
            [
                'title'=>"Blog 4",
                'content' => "Content 4",
                'status' => true
            ]
        ];
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
    }
}
