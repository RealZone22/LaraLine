<?php

namespace RealZone22\LaraLine\View\Components\Legend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Legend extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $color = 'dark',
    ) {
        $this->uuid = 'laraline-legend-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.legend.legend');
    }
}
