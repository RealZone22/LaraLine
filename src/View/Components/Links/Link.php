<?php

namespace RealZone22\LaraLine\View\Components\Links;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Link extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->uuid = 'laraline-link-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.links.link');
    }
}
