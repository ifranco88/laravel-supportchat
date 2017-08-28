# Laravel Support Chat

This package is in progress

## Installation (Laravel 5.x) 

Add the service provider to `config/app.php` under `providers`:

```php
'providers' => [
    Ifranco88\LaravelSupportChat\SupportChatServiceProvider::class,
],
```

Publish config:

```
php artisan vendor:publish --provider="Ifranco88\LaravelSupportChat\SupportChatServiceProvider" --tag="config"
```

Publish migrations:

```
php artisan vendor:publish --provider="Ifranco88\LaravelSupportChat\SupportChatServiceProvider" --tag="migrations"
```

Migrate your database:

```
php artisan migrate
```

Generate the public resources:

_Development environment_
```
npm run dev
```
or

_Production environment_
```
npm run prod
```

Run the server:

```
php artisan serve
```