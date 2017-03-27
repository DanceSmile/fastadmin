<?php

namespace FastAdmin\Providers;

use Illuminate\Support\ServiceProvider;

class FastAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/admin.php' => config_path('admin.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/../resource/fast-admin' => public_path('fast-admin'),
            __DIR__.'/../resource/components' => resource_path('fast-admin'),
            __DIR__.'/../resource/layouts' => resource_path('fast-admin'),
            __DIR__.'/../resource/admin' => resource_path('fast-admin')
        ], 'resource');

        $this->publishes([
//            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');

        $this->loadRoutesFrom(__DIR__.'/routes.php');




    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
