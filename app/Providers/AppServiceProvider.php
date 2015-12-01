<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MymailerServices;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('MymailerServices',function($app)
        {
            return new MymailerServices;
        });
      $this->app->bind('App\Contracts\Mailer','App\Services\MymailerServices');
      //$this->app->bind('App\Fcades\TheMailFacade.php','App\Services\MymailerServices');

    }

}
