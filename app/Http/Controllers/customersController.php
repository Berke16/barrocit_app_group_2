<?php

namespace App\Http\Controllers;

use App\Customer;
use App\ExtraAddress;
use App\Project;
use Illuminate\Http\Request;

class customersController extends Controller
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
            'companyName' => 'required|string',
            'Name' => 'nullable|string',
            'Insertion' => 'nullable|string',
            'Lastname' => 'nullable|string',
            'Email' => 'nullable|email',
            'Telephonenumber' => 'required|numeric',
            'Telephonenumber2' => 'nullable|numeric',
            'FaxNumber' => 'nullable|numeric',
            'Street' => 'nullable|string',
            'Zipcode' => 'nullable|string',
            'Housenumber' => 'nullable|numeric',
            'Residence' => 'nullable|string',
            'Street2' => 'nullable|string',
            'Zipcode2' => 'nullable|string',
            'Housenumber2' => 'nullable|string',
            'Residence2' => 'nullable|string',
            'Banknumber' => 'nullable|string',
            'VATCode' => 'nullable|numeric',
        ]);


        $customer = new \App\Customer();
            $customer->name = $request->companyName;
            $customer->street = $request->Street;
            $customer->housenumber = $request->Housenumber;
            $customer->zip_code = $request->Zipcode;
            $customer->residence = $request->Residence;
            $customer->cp_name = $request->Name;
            $customer->cp_lastname = $request->Lastname;
            $customer->cp_insertion = $request->Insertion;
            $customer->tele = $request->Telephonenumber;
            $customer->tele2 = $request->Telephonenumber2;
            $customer->fax_number = $request->FaxNumber;
            $customer->mail = $request->Email;
            $customer->vat_code = $request->VATCode;
            $customer->banknumber = $request->Banknumber;
        $customer->save();

        if ($request->Street2 != null|| $request->Housenumber2 != null|| $request->Zipcode2 != null|| $request->Residence2 != null)
        {
            $extraaders = new ExtraAddress();
            $extraaders->customer_id = Customer::latest()->first()->id;
            $extraaders->street = $request->Street2;
            $extraaders->housenumber = $request->Housenumber2;
            $extraaders->zip_code = $request->Zipcode2;
            $extraaders->residence = $request->Residence2;
            $extraaders->save();
        }


        return redirect('customer/'.Customer::latest()->first()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('customer.show')
            ->with('customer' , Customer::find($id));
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
