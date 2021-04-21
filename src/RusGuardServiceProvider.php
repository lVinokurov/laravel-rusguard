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
  {}

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
