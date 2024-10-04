<?php

namespace RealZone22\LaraLine;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RealZone22\LaraLine\Commands\LaraLineCommand;

class LaraLineServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laraline')
            ->hasConfigFile()
            ->hasViews('laraline')
            ->hasCommand(LaraLineCommand::class);

        $this->registerComponents();
    }

    public function registerComponents()
    {
        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/vendor/laraline/components'),
            __DIR__ . '/../src/View/Components' => app_path('View/Components'),
        ], 'laraline-components');

        $prefix = config('laraline.prefix');
        $components = config('laraline.components');

        if (empty($components)) {
            return;
        }
        foreach ($components as $name => $class) {
            Blade::component($class, $prefix . $name);

            // Register the component with the laraline prefix
            Blade::component($class, 'laraline-' . $name);
        }
    }
}
