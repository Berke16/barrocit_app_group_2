<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Action
 * @package App
 */
class Action extends Model
{
    use softDeletes;

    /**
     * @return string
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
