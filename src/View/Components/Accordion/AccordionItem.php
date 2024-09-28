<?php

namespace RealZone22\LaraLine\View\Components\Accordion;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class AccordionItem extends Component
{
    public string $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?bool $active = false,
        public ?bool $bordered = false,

        // Icons
        public ?bool $showIcon = true,
        public ?string $plusIcon = 'icon-plus',
        public ?string $minusIcon = 'icon-minus',

        // Slots
        public mixed $header = null,
        public mixed $content = null,
    ) {
        $this->uuid = 'laraline-collapse-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.accordion.accordion-item');
    }
}
