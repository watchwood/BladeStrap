<?php

namespace watchwood\BladeStrap;

use Blade;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

	
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Blade::directive('panel', BladeStrap::panel);		
		
        Blade::directive('endpanel', BladeStrap::endpanel );
		
        Blade::directive('alert', BladeStrap::alert);		
		
        Blade::directive('endalert', BladeStrap::endalert);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }
}
