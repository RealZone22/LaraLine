<?php

namespace RealZone22\LaraLine\View\Components\Carousel;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Carousel extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $controls = true,
        public bool $autoplay = true,
        public int $multiple = 1,
        public bool $centered = false,
        public bool $autoheight = false,
        public bool $draggable = false,
    ) {
        $this->uuid = 'laraline-carousel-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.carousel.carousel');
    }
}
