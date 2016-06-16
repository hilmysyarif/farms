<?php

namespace App\Providers;
use App\Test\Cats;
use Illuminate\Support\ServiceProvider;

class TestForGuardProvider extends ServiceProvider
{

    protected $defer = true;
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
        $this->app->bind(Cats::class, function($app) {
            return new Cats();
        });
    }
}
