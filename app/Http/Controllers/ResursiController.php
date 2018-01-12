<?php

namespace App\Http\Controllers;

use App\Banana;
use App\Resursi;
use Illuminate\Http\Request;

class ResursiController extends Controller
{
    public function store(Banana $banana){

        Resursi::create([
            'title' => request('title'),
            'banana_id' => $banana->id,
            'description' => request('description')

        ]);

    return back();
    }
}
