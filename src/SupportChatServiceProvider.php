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
            __DIR__ . '/../config/laravel-supportchat.php' => config_path('laravel-supportchat.php'),
        ], 'config');

        //Publish Views
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-supportchat'),
        ], 'views');

        //Stylesheet
        $this->publishes([
            __DIR__ . '/../resources/assets/sass' => base_path('resources/assets/sass/vendor/laravel-supportchat'),
        ], 'stylesheet');

        //Javascript
        $this->publishes([
            __DIR__ . '/../resources/assets/js' => base_path('resources/assets/js/vendor/laravel-supportchat'),
        ], 'javascript');
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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'supportchat');

        //Set config file and its alias
        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel-supportchat.php', 'laravel-supportchat'
        );
    }
}
