<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema; // At the top of your file
use Illuminate\Support\ServiceProvider;
use ConsoleTVs\Charts\Registrar as Charts;




class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Backpack\PermissionManager\app\Http\Controllers\UserCrudController::class, //this is package controller
            \App\Http\Controllers\Admin\UserCrudController::class //this should be your own controller
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {

        Schema::defaultStringLength(191);

        $charts->register([
            \App\Charts\UserChart::class
        ]);


    }
}
