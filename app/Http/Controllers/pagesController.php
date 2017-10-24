<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class pagesController
 * @package App\Http\Controllers
 */
class pagesController extends Controller
{
    /**
     * pagesController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest')->only('index');
        $this->middleware('user')->only('create');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userCreate(){
        return view('user.create');
    }
}
