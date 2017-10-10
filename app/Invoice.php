<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'tbl_invoices';

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
    public function status()
    {
        if($this->payday == null)
        {
            if($this->date_of_sending <= Carbon::create($this->date_of_sending)->addDays(30))
            {
                return 1;
            }
            else{
                return 2;
            }
        }
        else{
            return 3;
        }
    }


}
