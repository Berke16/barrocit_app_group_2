<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Invoice;
use App\Project;
use App\Offer;
use Illuminate\Http\Request;

class homesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        switch ($id){
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
                    ->with('customers', Customer::all())
                    ->with('offers', Offer::all());
                break;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
