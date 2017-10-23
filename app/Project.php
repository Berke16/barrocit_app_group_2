<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * @package App
 */
class Project extends Model
{
    use SoftDeletes;

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class)->withTrashed();
    }

    public function status()
    {
        if ($this->completed != true)
        {
            return $this->customer->status();
        }
        else
        {
            return 2;
        }
    }
}
