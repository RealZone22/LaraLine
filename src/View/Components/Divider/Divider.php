<?php

namespace RealZone22\LaraLine\View\Components\Divider;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Divider extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $position = 'center',
    ) {
        $this->uuid = 'laraline-divider-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.divider.divider');
    }
}
