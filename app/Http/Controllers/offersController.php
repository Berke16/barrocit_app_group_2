<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class offersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('sales')->only('store', 'create', 'statusChange', 'destroy');
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
            'description'           => 'required|string',
            'total_project_price'   => 'required|numeric'
        ]);

        $offer = new \App\Offer();
        $offer->customer_id          = $request->customerid;
        $offer->description          = $request->description;
        $offer->total_project_price  = $request->total_project_price;
        $request->status = 0;

        $offer->save();

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
        Offer::destroy($id);
        return back();
    }

    public function statusChange($id)
    {
        $offer = Offer::find($id);

        if($offer->status == true)
        {
            $offer->status = false;
        }
        else
            $offer->status = true;
        $offer->save();

        return back();
    }
}
