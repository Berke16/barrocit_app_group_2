<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'tbl_actions';

    /**
     * @return string
     */
    public function customer()
    {
        return $this->belongsTo("App\Customer");
    }
}
