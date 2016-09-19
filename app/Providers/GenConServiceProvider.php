<?php

namespace App\Providers;

use RTKit\Generator\Controller;
use Illuminate\Support\ServiceProvider;

class GenConServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Controller::class, function($app) {
            return new Controller();
        });
    }
}
