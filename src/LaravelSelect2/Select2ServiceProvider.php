<?php

namespace HalalSoft\LaravelSelect2;

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
//        $this->publishes(
//            [
//                __DIR__.'/../config/select2.php' => config_path('select2.php'),
//            ],
//            'config'
//        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'halalsoft.laravel-select2',
            function () {
                return $this->app->make('HalalSoft\LaravelSelect2\Select2Ajax');
            }
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'halalsoft.laravel-select2',
        ];
    }
}
