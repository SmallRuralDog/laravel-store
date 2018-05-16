<?php

namespace SmallRuralDog\LaravelStore;

use Illuminate\Support\Facades\Route;

class LaravelStore
{

    public static function registerRouters()
    {
        $attributes = [
            'prefix' => config('laravel-store.route.prefix'),
            'namespace' => 'SmallRuralDog\LaravelStore\Controllers',
            'middleware' => config('laravel-store.route.middleware'),
        ];
        Route::group($attributes, function ($router) {
            $router->get("/","HomeController@index");
        });

    }

}