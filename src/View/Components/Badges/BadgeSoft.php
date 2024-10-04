<?php

namespace RealZone22\LaraLine\View\Components\Badges;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class BadgeSoft extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $color = 'info',
    )
    {
        $this->uuid = 'laraline-badge-soft-' . Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.badges.badge-soft');
    }
}
