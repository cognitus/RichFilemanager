<?php

namespace Cognitus\Richfilemanager;

use Illuminate\Support\ServiceProvider;

class RichfilemanagerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Assets
        $this->publishes([
            __DIR__.'/../public' => public_path(),
        ], 'public');
        //config
        $this->publishes([
	  __DIR__.'/../config/richfilemanager.php' => config_path('richfilemanager.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
