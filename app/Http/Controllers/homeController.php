<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index()
    {
        return view('user.index');
        $this->middleware('auth');
    }
    public function formkeranjang(){
        return view('user.formcart');
    }
    public function adminindex(){
        return view('admin.index');
    }   
}
