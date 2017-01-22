<?php

namespace demo\General\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use Closure;

class demoGeneralServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        # Load package Routes
        require __DIR__.'/../Http/routes.php';

        # Add Package Views location
        View::addLocation(
          realpath(base_path('packages/demo/General/src/Views'))
        );

        # Get the package related views
        $this->loadViewsFrom(__DIR__.'/../Views/Layout',
          'demo-general-layout');
        $this->loadViewsFrom(__DIR__.'/../Views/Dashboard',
          'demo-general-dashboard');
        $this->loadViewsFrom(__DIR__.'/../Views/Auth',
          'demo-general-auth');

        # Load package related language files
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang',
          'demo-general-translation');

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
