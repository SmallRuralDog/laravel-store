<?php

namespace SmallRuralDog\LaravelStore;

use Illuminate\Support\ServiceProvider;


class LaravelStoreServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/Resources/Views', 'store');

        $this->publishes([
            __DIR__ . '/Config/laravel-store.php' => config_path('laravel-store.php')
        ]);

        $this->publishes([
            __DIR__ . '/Resources/Assets' => public_path('vendor/store')
        ], 'public');

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/laravel-store.php', 'laravel-store');

        LaravelStore::registerRouters();
    }
}