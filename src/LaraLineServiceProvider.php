<?php

namespace RealZone22\LaraLine;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;
use RealZone22\LaraLine\Commands\LaraLineCommand;
use RealZone22\LaraLine\Livewire\Toast;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaraLineServiceProvider extends PackageServiceProvider
{
    public $components = [
        // blade dir => class dir

        // Content
        'link' => 'Link',
        'divider' => 'Divider',
        'kbd' => 'Kbd',

        // Base
        'accordion' => 'Accordion',
        'alert' => 'Alert',
        'badge' => 'Badge',
        'button' => 'Button',
        'card' => 'Card',
        'carousel' => 'Carousel',
        'device' => 'Device',
        'progress' => 'Progress',
        'rating' => 'Rating',
        'spinner' => 'Spinner',

        // Navigation
        'tab' => 'Tab',
        'breadcrumb' => 'Breadcrumb',
        'step' => 'Step',

        // Form
        'input' => 'Input',
        'textarea' => 'Textarea',
        'checkbox' => 'Checkbox',
        'radio' => 'Radio',
        'switch' => 'Switch',
        'select' => 'Select',
        'range' => 'Range',
        'password' => 'Password',
        'copy-markup' => 'CopyMarkup',

        // Overlay
        'dropdown' => 'Dropdown',
        'modal' => 'Modal',
        'off-canvas' => 'OffCanvas',
        'popover' => 'Popover',
        'tooltip' => 'Tooltip',

        // Table
        'table' => 'Table',

        // Third-Party
        'chart' => 'Chart',
        'clipboard' => 'Clipboard',
        'datamap' => 'DataMap',
        'markdown-editor' => 'MarkdownEditor',
        'drag-and-drop' => 'DragAndDrop',
    ];

    public $livewireComponents = [
        // blade dir => class dir
        'toast' => 'Toast',
        'combo-box' => 'ComboBox',
        'search-box' => 'SearchBox',
    ];

    public $cvaServices = [
        'alert' => 'AlertCvaService',
        'badge' => 'BadgeCvaService',
        'button' => 'ButtonCvaService',
        'sheet' => 'SheetCvaService',
    ];

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
            ->hasTranslations()
            ->hasViews('laraline')
            ->hasCommand(LaraLineCommand::class);

        $this->registerComponents();
    }

    public function registerComponents()
    {
        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/vendor/laraline/components'),
            __DIR__ . '/../src/View/Components' => app_path('View/Components'),
            __DIR__ . '/../resources/views/livewire' => resource_path('views/vendor/laraline/livewire'),
            __DIR__ . '/../src/Livewire' => app_path('Livewire'),
        ], 'laraline-components');

        foreach ($this->components as $blade => $class) {
            $this->publishes([
                __DIR__ . "/../resources/views/components/{$blade}" => resource_path("views/vendor/laraline/components/{$blade}"),
                __DIR__ . "/../src/View/Components/{$class}" => app_path("View/Components/{$class}"),
            ], 'laraline-component-' . $blade);
        }

        foreach ($this->livewireComponents as $blade => $class) {
            $this->publishes([
                __DIR__ . "/../resources/views/livewire/{$blade}" => resource_path("views/vendor/laraline/livewire/{$blade}"),
                __DIR__ . "/../src/Livewire/{$class}.php" => app_path("Livewire/{$class}.php"),
            ], 'laraline-livewire-' . $blade);
        }

        foreach ($this->cvaServices as $name => $class) {
            $this->publishes([
                __DIR__ . "/../src/Services/LaraLine/{$class}.php" => app_path("Services/LaraLine/{$class}.php"),
            ], 'laraline-cva-service-' . $name);

            $this->app->singleton("RealZone22\\LaraLine\\Services\\{$class}", function () use ($class) {
                return call_user_func("RealZone22\\LaraLine\\Services\\{$class}::new");
            });
        }
    }
}
