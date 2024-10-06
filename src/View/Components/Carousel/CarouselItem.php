<?php

namespace RealZone22\LaraLine\View\Components\Carousel;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class CarouselItem extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $avatar = null,
        public mixed $footer = null,
        public bool $right = false,
    ) {
        $this->uuid = 'laraline-carousel-item-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.carousel.carousel-item');
    }
}
