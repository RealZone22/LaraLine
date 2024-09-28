<?php

namespace RealZone22\LaraLine\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $uuid;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $title = null,
        public mixed $description = null,
        public mixed $actions = null,

        public ?bool $dismissible = false,
        public ?bool $outline = false,
        public ?string $color = 'info',
        public ?string $icon = null,
    )
    {
        $type = $this->outline ? 'soft' : 'solid';
        $this->color = config('laraline.alerts.colors.' . $type . '.' . $this->color);
        $this->uuid = 'laraline-alert-' . Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.alert');
    }
}
