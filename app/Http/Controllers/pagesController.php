<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('index');
        $this->middleware('admin')->only('create');
    }

    public function index()
    {
        return view('index');
    }
    public function userCreate(){
        return view('admin.create');
    }
}
