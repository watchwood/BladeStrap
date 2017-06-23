# BladeStrap

Bootstrap 3 helpers for Laravel's Blade view engine.

## Installation

Run `composer require watchwood/BladeStrap` to include the package in your Laravel app.

Add `watchwood\BladeStrap\ServiceProvider::class` to your app config service providers.

## Usage

### @panel($title, $type)

Opens a panel.

* $title (optional): Title field for the panel
* $type (optional): primary, warning, etc.  defaults to default

### @endpanel

Closes a panel.

### @alert($title, $type)

Opens an alert box.

* $title (optional): Title field for the panel
* $type (optional): primary, warning, etc.  defaults to info

### @endalert

Closes an alert box.


## Contributing

Bootstrap has a ton of stuff, I'm currently adding them to this package on a basis of when personally I need them.
If you have anything you'd like to see added to this package, feel free to reach 
out to me on Github or make a Pull Request with the extra functionality.
