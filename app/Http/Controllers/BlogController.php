<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;


class BlogController extends Controller
{

    public function index(){

        $blogs = Blog::latest()->get();

        return view('blog.index', compact('blogs'));
    }

    public function create(){
        return view ('blog.create');
    }


    public function store(){

        $this->validate(request(),[
                'title' => 'required',
                'body'  => 'required'
            ]);

        Blog::create(request(['title' , 'body']));

        return redirect('/blog');
    }

    public function show(Blog $blog){

            return view('blog.show', compact('blog'));
    }

}



