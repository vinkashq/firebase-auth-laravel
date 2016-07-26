<?php

namespace Vinkas\Firebase\Auth;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider {

  /**
  * Perform post-registration booting of services.
  *
  * @return void
  */
  public function boot()
  {
    if (! $this->app->routesAreCached()) {
        require __DIR__.'/routes.php';
    }

    $this->publishes([
      __DIR__.'/config/firebase.php' => config_path('vinkas/firebase/auth.php'),
    ], 'config');

    $this->publishes([
      __DIR__.'/../database/migrations/' => database_path('migrations'),
    ], 'migrations');

    $this->publishes([
        __DIR__.'/assets' => public_path('vinkas/firebase'),
    ], 'public');

    $this->publishes([
        __DIR__.'/views' => resource_path('views/vinkas/firebase'),
    ], 'views');
  }

  /**
  * Register bindings in the container.
  *
  * @return void
  */
  public function register()
  {
    //
  }

}
