<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerCreateForm;
use App\Http\Requests\CustomerEditAdminFrom;
use App\Http\Requests\CustomerEditDevelopmentForm;
use App\Http\Requests\CustomerEditFinanceForm;
use App\Http\Requests\CustomerEditSalesForm;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 * Class customersController
 * @package App\Http\Controllers
 */
class customersController extends Controller
{
    /**
     * customersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('sales')->only('store', 'create', 'destroy');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
    public function store(CustomerCreateForm $request)
    {
        $customer                       = new Customer();
        $customer->name                 = $request->company_name;
        $customer->street               = $request->street;
        $customer->housenumber          = $request->housenumber;
        $customer->zip_code             = $request->zipcode;
        $customer->residence            = $request->residence;
        $customer->street2              = $request->street2;
        $customer->housenumber2         = $request->housenumber2;
        $customer->zip_code2            = $request->zipcode2;
        $customer->residence2           = $request->residence2;
        $customer->cp_name              = $request->name;
        $customer->cp_lastname          = $request->lastname;
        $customer->cp_insertion         = $request->insertion;
        $customer->tele                 = $request->telephonenumber;
        $customer->tele2                = $request->telephonenumber2;
        $customer->fax_number           = $request->fax_number;
        $customer->mail                 = $request->email;
        $customer->vat_code             = $request->vat_code;
        $customer->banknumber           = $request->banknumber;
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
        $customer = customer::find($id);
        return view('customer.edit')
        ->with('customer', $customer);
    }


    /**
     * @param Customer $customer
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Customer $customer)
    {
        switch (Auth::user()->type)
        {
            case 'admin';
                return $this->updateAsAdmin(CustomerEditAdminFrom::capture(), $customer);
            break;
            case 'sales';
                return $this->updateAsSales(CustomerEditSalesForm::capture(), $customer);
                break;
            case 'finance';
                return $this->updateAsFinance(CustomerEditFinanceForm::capture(), $customer);
                break;
            case 'development';
                return $this->updateAsDevelopment(CustomerEditDevelopmentForm::capture(), $customer);
                break;
                default;
                return back()->withErrors('Something went wrong try again!');
        }
    }

    /**
     * @param CustomerEditAdminFrom $request
     * @param $customer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateAsAdmin(CustomerEditAdminFrom $request, $customer)
    {
        $request->persist($customer);
        return redirect(action('CustomersController@show', $customer->id));
    }

    /**
     * @param CustomerEditSalesForm $request
     * @param $customer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateAsSales(CustomerEditSalesForm $request, $customer)
    {
        $request->persist($customer);
        return redirect(action('CustomersController@show', $customer->id));
    }

    /**
     * @param CustomerEditFinanceForm $request
     * @param $customer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateAsFinance(CustomerEditFinanceForm $request, $customer)
    {
        $request->persist($customer);
        return redirect(action('CustomersController@show', $customer->id));
    }


    /**
     * @param CustomerEditDevelopmentForm $request
     * @param $customer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateAsDevelopment(CustomerEditDevelopmentForm $request, $customer)
    {
        $request->persist($customer);
        return redirect(action('CustomersController@show', $customer->id));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id);
        Session::flash('message', "Customer has been deleted.");
        return redirect('/home');
    }

}
