<?php

namespace DYaskur\Select2;

use Illuminate\Support\ServiceProvider;

class Select2ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__ . '/../config/select2.php' => config_path('select2.php'),
        ], 'config');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
//        $this->mergeConfigFrom(
//            __DIR__ . '/../config/select2.php',
//            'sweet-alert'
//        );

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'dyaskur.select2',
        ];
    }
}
