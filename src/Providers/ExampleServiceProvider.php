<?php

namespace Mak\Example\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        }

        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');

        $this->publishes([
            '/../Swagger/' => app_path('Swagger'),
        ]);
    }
}