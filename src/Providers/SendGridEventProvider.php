<?php

namespace Hjmsw\SendGridEventApi\Providers;

use Illuminate\Support\ServiceProvider;

class SendGridEventProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->publishes([
            __DIR__.'/../../config/config.php' => config_path('sendgrid_event_api.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Hjmsw\SendGridEventApi\Controllers\SendGridEventController');
    }
}
