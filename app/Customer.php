<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App
 */
class Customer extends Model
{
    use softDeletes;

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function actions()
    {
        return $this->hasMany(Action::class);
    }

    public function invoices()
    {
        return $this->hasManyThrough(Invoice::class, Project::class);
    }

/*
 * Checks if the saldo is higher then limit
 * If true it returns true and makes it good
 * Else if returns false and it sets it to beyond limit
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
     * Checks the invoice status and if the status is 2 it shows you the invoice price
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