<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use \App\Invoice;

class invoicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('finance')->only('store', 'destroy', 'payed');
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
                'payday'                => 'nullable|date',
                'date_of_sending'       => 'required|date',
                'description'           => 'required|string',
                'price'                 => 'required|numeric',
            ]);

            $invoice = new Invoice();
            $invoice->description       = $request->description;
            $invoice->price             = $request->price;
            $invoice->date_of_sending   = $request->date_of_sending;
            $invoice->project_id        = $request->projectid;
        $invoice->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return back();
    }

    public function payed(Invoice $invoice)
    {
        $invoice->payday2 = Carbon::now();
        $invoice->save();
        return back();
    }


}
