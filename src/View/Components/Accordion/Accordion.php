<?php

namespace RealZone22\LaraLine\View\Components\Accordion;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Accordion extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?bool $isAccordion = true,
        public ?bool $alwaysOpen = false,
    ) {
        $this->uuid = 'laraline-accordion-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.accordion.accordion');
    }
}
