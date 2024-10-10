<?php

namespace RealZone22\LaraLine\View\Components\Timeline;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Timeline extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null,
        public ?string $header = null,
        public ?string $content = null,
        public ?string $icon = null,
        public bool $hover = false,
    ) {
        $this->uuid = 'laraline-timeline-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.timeline.timeline');
    }
}
