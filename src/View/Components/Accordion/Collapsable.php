<?php

namespace RealZone22\LaraLine\View\Components\Accordion;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Collapsable extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $plusIcon = 'icon-plus',
        public string $minusIcon = 'icon-minus',
        public string $arrowIcon = 'icon-chevron-down',
        public bool $showIcon = true,

        public bool $active = false,
        public bool $bordered = false,

        public bool $bottom = false,

        public string $header = '',
        public string $content = '',
    ) {
        $this->uuid = 'laraline-collapsable-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.accordion.collapsable');
    }
}
