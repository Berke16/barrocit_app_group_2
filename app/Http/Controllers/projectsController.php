<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Project;
use App\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;

class projectsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('sales')->only('create', 'store', 'destroy');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('project.create')
            ->with('customer', Customer::find($id));
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
            'name'                      => 'required|string',
            'customerid'                => 'required',
            'description'               => 'required|string',
            'start_date'                => 'required|date',
            'deadline'                  => 'required|date|after:start_date',
            'maintained_contract'       => 'required|max:1',
            'operating_system'          => 'required|string',
            'applications'              => 'required|string',
            'hardware'                  => 'required|string',
            'price'                     => 'required|numeric',
            'amount'                    => 'required|numeric',
            'kind_of_terms'             => 'required',
            'first_payday'              => 'required|date',
        ]);

        $project = new \App\Project();
        $project->name                  = $request->name;
        $project->customer_id           = $request->customerid;
        $project->description           = $request->description;
        $project->start_date            = $request->start_date;
        $project->deadline              = $request->deadline;
        $project->maintained_contract   = $request->maintained_contract;
        $project->operating_system      = $request->operating_system;
        $project->applications          = $request->applications;
        $project->hardware              = $request->hardware;
        $project->price                 = $request->price;
        $project->amount                = $request->amount;
        $project->kind_of_terms         = $request->kind_of_terms;
        $project->first_payday          = $request->first_payday;
        $project->save();

        $invoice_price = $project->price / $project->amount;
        $amount = 0;


        for ($i = 1; $i <= $project->amount; $i++)
        {
            $invoice = new Invoice();
                $invoice->project_id        = $project->id;
                $invoice->description       = 'Number '. $i .' invoice for project: '.$project->name;
                $invoice->price             = $invoice_price;
                if ($i > 1)
                {
                    $amount += $project->kind_of_terms;
                    $invoice->date_of_sending   = Carbon::parse($project->first_payday)->addMonths($amount);
                }
                else{
                    $invoice->date_of_sending   = Carbon::parse($project->first_payday);
                }
            $invoice->save();
        }
        return redirect(action('ProjectsController@show', $project->id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project.show', compact('project', $project));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('project.edit')
            ->with('project', project::find($id))
            ->with('customer', customer::find($id));

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
        $this->validate($request, [
            'name'                      => 'required|string',
            'customerid'                => 'required',
            'description'               => 'required|string',
            'start_date'                => 'required|date',
            'deadline'                  => 'required|date|after:start_date',
            'maintained_contract'       => 'required|max:1',
            'operating_system'          => 'required|string',
            'applications'              => 'required|string',
            'hardware'                  => 'required|string',
        ]);
        $project= project::find($id);
        $project->name                  = $request->name;
        $project->customer_id           = $request->customerid;
        $project->description           = $request->description;
        $project->start_date            = $request->start_date;
        $project->deadline              = $request->deadline;
        $project->maintained_contract   = $request->maintained_contract;
        $project->operating_system      = $request->operating_system;
        $project->applications          = $request->applications;
        $project->hardware              = $request->hardware;
        $project->save();

        return redirect(action('ProjectsController@show', $project->id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
        return redirect('/home');
    }
}
