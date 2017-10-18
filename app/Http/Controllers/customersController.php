<?php

namespace App\Http\Controllers;

use App\Customer;
use App\ExtraAddress;
use App\Project;
use Illuminate\Http\Request;

class customersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'companyName'               => 'required|string',
            'Name'                      => 'nullable|string',
            'Insertion'                 => 'nullable|string',
            'Lastname'                  => 'nullable|string',
            'Email'                     => 'nullable|email',
            'Telephonenumber'           => 'required|numeric',
            'Telephonenumber2'          => 'nullable|numeric',
            'FaxNumber'                 => 'nullable|numeric',
            'Street'                    => 'nullable|string',
            'Zipcode'                   => 'nullable|string',
            'Housenumber'               => 'nullable|numeric',
            'Residence'                 => 'nullable|string',
            'Street2'                   => 'nullable|string',
            'Zipcode2'                  => 'nullable|string',
            'Housenumber2'              => 'nullable|string',
            'Residence2'                => 'nullable|string',
            'Banknumber'                => 'nullable|string',
            'VATCode'                   => 'nullable|numeric',
        ]);

        $customer = new \App\Customer();
            $customer->name             = $request->companyName;
            $customer->street           = $request->Street;
            $customer->housenumber      = $request->Housenumber;
            $customer->zip_code         = $request->Zipcode;
            $customer->residence        = $request->Residence;
            $customer->street2          = $request->Street2;
            $customer->housenumber2     = $request->Housenumber2;
            $customer->zip_code2        = $request->Zipcode2;
            $customer->residence2       = $request->Residence2;
            $customer->cp_name          = $request->Name;
            $customer->cp_lastname      = $request->Lastname;
            $customer->cp_insertion     = $request->Insertion;
            $customer->tele             = $request->Telephonenumber;
            $customer->tele2            = $request->Telephonenumber2;
            $customer->fax_number       = $request->FaxNumber;
            $customer->mail             = $request->Email;
            $customer->vat_code         = $request->VATCode;
            $customer->banknumber       = $request->Banknumber;
        $customer->save();

        return redirect(action('CustomersController@show', $customer->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer', $customer));
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
        Customer::destroy($id);
        return redirect('/home');
    }

}
