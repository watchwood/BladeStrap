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
        Blade::directive('panel', BladeStrap::class.'::panel');		
		
        Blade::directive('endpanel', BladeStrap::class.'::endPanel');
		
        Blade::directive('alert', BladeStrap::class.'::alert');		
		
        Blade::directive('endalert', BladeStrap::class.'::endalert');
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
