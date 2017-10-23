<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Invoice;
use App\Project;
use App\Offer;
use Illuminate\Http\Request;

class homesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (\Auth::user()->type){
            case 'development':
                return view('homes.development')
                    ->with('customers', Customer::all())
                    ->with('projects', Project::all());
                break;
            case 'finance':
                return view('homes.finance')
                    ->with('customers', Customer::all())
                    ->with('projects', Project::all())
                    ->with('invoices', Invoice::all());
                break;
            case 'sales':
                return view('homes.sales')
                    ->with('offers', Offer::all())
                    ->with('customers', Customer::all());
                break;
            case 'admin':
                return view('homes.admin')
                    ->with('customers', Customer::all())
                    ->with('projects', Project::all())
                    ->with('invoices', Invoice::all())
                    ->with('offers', Offer::all());
                break;
        }
        return view('index');
    }
}
