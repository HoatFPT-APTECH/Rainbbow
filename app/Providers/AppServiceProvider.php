<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()->composer('RainbowViews.*', function ($view) {
            $view->with('assetPathRainbow', asset('RainbowPublic'));
        });
        view()->composer('AdminViews.*',function($view){
             $view->with('assethPathAdmin',asset('AdminPublic'));
        });
        Paginator::useBootstrap();
    }
}
