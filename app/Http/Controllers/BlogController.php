<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function index(){

        return view('blog.index');
    }

    public function create(){
        return view ('blog.create');
    }


    public function store(){
        // Create a new post using the requested data
        // Save it to the database

        \App\Blog::create([
            'title' => request('title'),
            'body' => request('body')

        ]);

        // And then redirect to the home page
        return redirect('/blog');
    }
}
