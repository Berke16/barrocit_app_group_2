<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Invoice;
use App\Offer;
use App\Project;
use App\User;
use Illuminate\Http\Request;

/**
 * Class trashController
 * @package App\Http\Controllers
 */
class trashController extends Controller
{
    /**
     * trashController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return view('trash.index')
        ->with('customers', Customer::onlyTrashed()->get())
        ->with('projects', Project::onlyTrashed()->get())
        ->with('invoices', Invoice::onlyTrashed()->get())
        ->with('offers', Offer::onlyTrashed()->get())
        ->with('users', User::onlyTrashed()->get());
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restoreCustomer($id)
    {
        $customer = Customer::onlyTrashed()->find($id);
        $customer->restore();
        return redirect(action('CustomersController@show' , $customer->id));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restoreProject($id)
    {
        $project = Project::onlyTrashed()->find($id);
        $project->restore();
        return redirect(action('ProjectsController@show' , $project->id));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restoreInvoice($id)
    {
        $invoice = Invoice::onlyTrashed()->find($id);
        $invoice->restore();
        return redirect(action('ProjectsController@show' , $invoice->id));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restoreOffer($id)
    {
        $invoice = Offer::onlyTrashed()->find($id);
        $invoice->restore();
        return redirect (action('CustomersController@show' , $invoice->id));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restoreUser($id){
        $user = User::onlyTrashed()->find($id);
        $user->restore();
        return redirect (action('UsersController@index'));
    }
}
