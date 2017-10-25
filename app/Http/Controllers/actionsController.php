<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;

class actionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
            'time_of_action'    => 'required|date_format:H:i',
            'date_of_action'    => 'required|date',
            'description'       => 'required|string',
        ]);

        $action = new \App\Action();
        $action->customer_id    = $request->customerid;
        $action->date_of_action = $request->date_of_action;
        $action->time_of_action = $request->time_of_action;
        $action->description    = $request->description;

        $action->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Action::destroy($id);
        return back();
    }
}
