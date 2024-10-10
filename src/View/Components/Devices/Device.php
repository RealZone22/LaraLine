<?php

namespace RealZone22\LaraLine\View\Components\Devices;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Device extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = 'desktop',
        public string $url = '',
    ) {
        $this->uuid = 'laraline-devices-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.devices.device');
    }
}
