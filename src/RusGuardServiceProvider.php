<?php


namespace lVinokurov\RusGuard;

use Illuminate\Support\ServiceProvider;

class RusGuardServiceProvider extends ServiceProvider
{
    /**
     * Register the config for publishing
     *
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/rusguard.php' => config_path('rusguard.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('rusguard', RusGuard::class);
    }
}
