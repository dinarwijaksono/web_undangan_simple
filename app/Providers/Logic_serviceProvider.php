<?php

namespace App\Providers;

use App\Service\Auth_Service;
use App\Service\Confirmation_service;
use App\Service\ViewsPage_service;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class Logic_serviceProvider extends ServiceProvider implements DeferrableProvider
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

        $this->app->singleton(Confirmation_service::class, function ($app) {
            return new Confirmation_service($app);
        });

        $this->app->singleton(Auth_service::class, function ($app) {
            return new Auth_service($app);
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
