<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Action extends Model
{
    use softDeletes;

    protected $table = 'tbl_actions';

    /**
     * @return string
     */
    public function customer()
    {
        return $this->belongsTo("App\Customer");
    }
}
