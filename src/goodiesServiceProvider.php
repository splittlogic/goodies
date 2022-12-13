<?php

namespace splittlogic\goodies;

use Illuminate\Support\ServiceProvider;

class goodiesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

      $this->loadViewsFrom(__DIR__.'/../resources/views', 'goodies');
  		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
      /*
       * Optional methods to load your package assets
       */
       // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

  		if ($this->app->runningInConsole()) {
  			$this->bootForConsole();
  		}

    }

    /**
     * Register the application services.
     */
    public function register()
    {

      $this->mergeConfigFrom(__DIR__.'/../config/goodies.php', 'goodies');

  		$this->app->singleton('goodies', function ($app) {
  			return new goodies;
  		});

    }

    public function provides()
  	{

  		return ['goodies'];

  	}

    protected function bootForConsole()
  	{

  		// Publishing the configuration file.
  		$this->publishes([
  			__DIR__.'/../config/goodies.php' => config_path('goodies.php'),
  		], 'goodies.config');

  		// Publishing the views.
      $this->publishes([
          __DIR__.'/../resources/views' => base_path('resources/views/vendor/splittlogic'),
      ], 'goodies.views');

      // Publishing assets.
      $this->publishes([
          __DIR__.'/../resources/assets' => public_path('vendor/splittlogic'),
      ], 'public');

  	}
}
