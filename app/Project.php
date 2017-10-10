<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "tbl_projects";

    public function invoices()
    {
        return $this->hasMany('App\Invoice');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
    public function status()
    {
        if($this->stage = 1)
        {

        }
        else;
    }
}
