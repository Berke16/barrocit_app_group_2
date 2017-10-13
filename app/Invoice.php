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


    /*
     * Return 0 when : Not Sended
     * Return 1 when : Invoice in progress
     * Return 2 when : Invoice not payed
     * Return 3 when : Invoice payed
     *
     */

    public function status()
    {
        if ($this->payday2 == NULL)
        {
            if(Carbon::parse($this->date_of_sending) < Carbon::now() && Carbon::parse($this->date_of_sending)->addDays(30) > Carbon::now())
            {
                return 1;
            }
            elseif (Carbon::parse($this->date_of_sending) > Carbon::now())
            {
                return 0;
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
