<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('index');
        $this->middleware('user')->only('create');
    }

    public function index()
    {
        return view('index');
    }
    public function userCreate(){
        return view('user.create');
    }
}
