<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ImageModel', \App\Image::class);

        $this->app->bind(
            \App\PathManager\PathManagerInterface::class,
            \App\PathManager\PathManager::class
        );

        $this->app->singleton('alert', \App\Alert::class);
    }
}
