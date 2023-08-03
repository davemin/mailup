<?php

namespace Davemin\Mailup\Providers;

use Davemin\Mailup\Mailup;
use Illuminate\Support\ServiceProvider as LaravelProvider;

class ServiceProvider extends LaravelProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
        $this->registerViews();
        $this->publishConfig();
    }

    public function register()
    {
        $this->registerBinds();
        $this->registerConfig();
    }

    public function publishConfig(){
        $this->publishes([
            __DIR__ . '/../config/mailup.php' => config_path('mailup.php'),
        ], 'mailup-config');

    }

    public function registerRoutes(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function registerViews(){
        $this->loadViewsFrom(__DIR__.'/../views', 'mailup');
    }

    public function registerConfig(){
        $this->mergeConfigFrom(__DIR__.'/../config/mailup.php', 'mailup');
    }

    public function registerBinds(){
        $this->app->bind('mailup',function(){
            return new Mailup();
        });
    }
}
