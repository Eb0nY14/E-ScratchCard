<?php

namespace App\Providers;

use App\Models\Lottery;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View Composer allow for the retrieval of active draws for display in menu
        View::share('draws_list',Lottery::with(['latestDraw'])->get());
    }
}
