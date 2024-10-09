<?php

namespace RealZone22\LaraLine\View\Components\Spinners;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Spinner extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $color = 'blue',
    ) {
        $this->uuid = 'laraline-spinner-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.spinners.spinner');
    }
}
