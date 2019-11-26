<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    //
    public function index(){
    	$blogs = Blog::all();
    	return view('blogs.index',['blogs'=>$blogs]);
    }
    
    public function show($id){
    	$blog= Blog::find($id);
    	return view ('blogs.show',['blog'=>$blog]);
    }


         public function create(){
    	return view('blogs.create');
}


public function store(Request $request){
	$blog = new Blog;
	$blog->title = $request->title;
	$blog->content = $request->content;
	$blog->save();
	return redirect()->route('blogs_path');
}
}