<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    protected $table = 'tbl_offers';


    use SoftDeletes;
    /**
     * @return string
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function status()
    {

    }
}
