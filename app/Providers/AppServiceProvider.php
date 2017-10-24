<?php

namespace App\Providers;

use App\Customer;
use App\Invoice;
use App\Offer;
use App\Project;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         *
         * Deleting
         *
         */
        Schema::defaultStringLength(191);

        Customer::deleting(function($customer) { // before delete() method call this$
            foreach ($customer->invoices as $invoice)
            {
                $invoice->delete();
            }
            $customer->projects()->delete();
            $customer->offers()->delete();
            $customer->actions()->delete();
        });

        Project::deleting(function ($project)
        {
            $project->invoices()->delete();
        });

        /*
         *
         * Restoring
         *
         */

        Project::restoring(function ($project)
        {
            $project->customer->restore();
        });

        Invoice::restoring(function ($invoice)
        {
            $invoice->project->restore();
        });

        Offer::restoring(function ($offer)
        {
            $offer->customer->restore();
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
