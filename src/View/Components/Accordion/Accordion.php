<?php

namespace RealZone22\LaraLine\View\Components\Accordion;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Accordion extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?bool $keepOpen = false,
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.accordion.accordion');
    }
}
