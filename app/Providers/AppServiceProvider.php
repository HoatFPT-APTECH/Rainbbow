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
            $view->with('assethPathAdmin',asset('AdminPublic'));
        });
        view()->composer('MailViews.*', function ($view) {
            $view->with('assetPathMailOnline', asset('https://www.webstrot.com/html/moviepro/html/'));
            $view->with('assetPathRainbow', asset('RainbowPublic'));
        });
        view()->composer('AdminViews.*',function($view){
            $view->with('assetPathRainbow', asset('RainbowPublic'));
            $view->with('assethPathAdmin',asset('AdminPublic'));
        });
        
        Paginator::useBootstrap();
    }
}
