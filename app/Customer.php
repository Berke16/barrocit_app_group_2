<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
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

    public function status()
    {
        if ($this->balance <= $this->limit)
        {
            return true;
        }
        return false;

    }

    public function calculateSaldo()
    {
        //All open invoices
        //Calculate Saldo
        //Return Salod
    }

}
