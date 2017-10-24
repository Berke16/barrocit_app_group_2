<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Offer
 * @package App
 */
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
