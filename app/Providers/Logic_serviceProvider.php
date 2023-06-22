<?php

namespace App\Providers;

use App\Service\ViewsPage_service;
use Illuminate\Support\ServiceProvider;

class Logic_serviceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ViewsPage_service::class, function ($app) {
            return new ViewsPage_service($app);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
