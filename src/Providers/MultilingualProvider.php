<?php

namespace Multilingual\Translation\Providers;

use Illuminate\Support\ServiceProvider;

class MultilingualProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Multilingual\Translation\Console\Command\LoadDAtaTranslation::class
            ]);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');

    }
}
