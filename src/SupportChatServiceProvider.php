<?php

namespace Ifranco88\LaravelSupportChat;

use Illuminate\Support\ServiceProvider;

class SupportChatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Include package routes
        include __DIR__.'/routes.php';

        //Publish migrations
        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');

        //Publish Config
        $this->publishes([
            __DIR__ . '/config' => config_path('laravel-supportchat'),
        ]);

        //Publish Views
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/laravel-supportchat'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Ifranco88\LaravelSupportChat\SupportChatController');

        //Set templates route
        $this->loadViewsFrom(__DIR__.'/views', 'supportchat');

        //Set config file and its alias
        $this->mergeConfigFrom(
            __DIR__ . '/config/laravel-supportchat.php', 'laravel-supportchat'
        );
    }
}
