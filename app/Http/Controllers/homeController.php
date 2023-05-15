<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index()
    {
        return view('user.index');
    }
    public function formkeranjang(){
        return view('user.formkeranjang');
    }
}
