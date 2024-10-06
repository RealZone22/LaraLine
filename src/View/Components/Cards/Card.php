<?php

namespace RealZone22\LaraLine\View\Components\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Card extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $title = null,
        public mixed $subtitle = null,
        public mixed $header = null,
        public mixed $footer = null,
    ) {
        $this->uuid = 'laraline-card-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.cards.card');
    }
}
