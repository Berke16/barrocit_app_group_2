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
            'company_name'              => 'required|string',
            'name'                      => 'nullable|string',
            'insertion'                 => 'nullable|string',
            'lastname'                  => 'nullable|string',
            'email'                     => 'nullable|email',
            'telephonenumber'           => 'required|numeric',
            'telephonenumber2'          => 'nullable|numeric',
            'fax_number'                => 'nullable|numeric',
            'street'                    => 'nullable|string',
            'zipcode'                   => 'nullable|string',
            'housenumber'               => 'nullable|numeric',
            'residence'                 => 'nullable|string',
            'street2'                   => 'nullable|string',
            'zipcode2'                  => 'nullable|string',
            'housenumber2'              => 'nullable|string',
            'residence2'                => 'nullable|string',
            'banknumber'                => 'nullable|string',
            'vat_code'                  => 'nullable|string',
        ]);

        $customer = new \App\Customer();
            $customer->name             = $request->company_name;
            $customer->street           = $request->street;
            $customer->housenumber      = $request->housenumber;
            $customer->zip_code         = $request->zipcode;
            $customer->residence        = $request->residence;
            $customer->street2          = $request->street2;
            $customer->housenumber2     = $request->housenumber2;
            $customer->zip_code2        = $request->zipcode2;
            $customer->residence2       = $request->residence2;
            $customer->cp_name          = $request->name;
            $customer->cp_lastname      = $request->lastname;
            $customer->cp_insertion     = $request->insertion;
            $customer->tele             = $request->telephonenumber;
            $customer->tele2            = $request->telephonenumber2;
            $customer->fax_number       = $request->fax_number;
            $customer->mail             = $request->email;
            $customer->vat_code         = $request->vat_code;
            $customer->banknumber       = $request->banknumber;
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
