<?php

namespace RealZone22\LaraLine\View\Components\Rating;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Rating extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $amount = 5,
        public string $icon = 'icon-star',
    ) {
        $this->uuid = 'laraline-rating-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.rating.rating');
    }
}
