<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{

    use SoftDeletes;
    /**
     * @return string
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class)->withTrashed();
    }
}
