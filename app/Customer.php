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

}
