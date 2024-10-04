<?php

namespace RealZone22\LaraLine\View\Components\Alerts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class AlertSoft extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $color = 'info',
        public bool $dismissible = false,
        public ?string $icon = null,

        public mixed $header = null,
        public mixed $content = null,
        public mixed $actions = null,
    ) {
        $this->uuid = 'laraline-alert-soft-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.alerts.alert-soft');
    }
}
