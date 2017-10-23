<?php

namespace App\Providers;

use App\Customer;
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
