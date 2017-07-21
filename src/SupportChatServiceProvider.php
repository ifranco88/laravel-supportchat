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
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Ifranco88\LaravelSupportChat\SupportChatController');
        $this->loadViewsFrom(__DIR__.'/views', 'supportchat');
    }
}
