<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\MainNav;
use App\Models\PageConfig;

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
        Paginator::useBootstrap();

        View::composer('*', function ($view) {
            $MainNavs = MainNav::orderBy('order')->get();
            $view->with('MainNavs', $MainNavs);
        });

        View::composer('*', function ($view) {
            $PageConfigs = PageConfig::all();
            $view->with('PageConfigs', $PageConfigs);
        });
    }
}
