<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('front.template-part.nav-main', function($view){
            $view->with('all', \App\Menu::all());
        });

        view()->composer('*', function($view){
            $view->with('options', \App\Option::keyChain());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
