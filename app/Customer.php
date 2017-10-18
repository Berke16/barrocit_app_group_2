<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use softDeletes;
    protected $table = "tbl_customers";

    public function extraaddress()
    {
        return $this->hasOne('App\ExtraAddress');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

    public function actions()
    {
        return $this->hasMany('App\Action');
    }

    public function invoices()
    {
        return $this->hasManyThrough('App\Invoice', 'App\Project');
    }

/*
 * checks if the saldo is higher then limit
 * if true it returns true and makes it good
 * else if returns false and it sets it to beyond limit
 *
 */



    public function status()
    {
        if($this->saldo() > $this->limit)
        {
            return true;
        }
        else
            return false;
    }

    /*
     * checks the invoice status and if the status is 2 it shows you the invoice price
     *
     *
     *
     */
    public function saldo()
    {
        $price = 0;
        foreach ($this->invoices as $invoice)
        {
            if($invoice->status() == 2)
            {
                $price = $price + $invoice->price;
            }
        }

        return $price;
    }


}
