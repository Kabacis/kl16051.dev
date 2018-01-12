<?php

namespace App\Http\Controllers;

use App\Banana;
use Illuminate\Http\Request;

class BananaController extends Controller
{
    public function index(){

            return view('bananas.master');
    }

    public function showSP(){

        $bananas = Banana::latest()->get();
        return view('bananas.skati.saraksts', compact('bananas'));
    }

    public function show(Banana $banana){

        return view('bananas.skati.show', compact('banana'));
    }
}
