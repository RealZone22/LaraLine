<?php

namespace RealZone22\LaraLine\View\Components\KBD;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class KBD extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = 'darkbg',
    ) {
        $this->uuid = 'laraline-kbd-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.kbd.kbd');
    }
}
