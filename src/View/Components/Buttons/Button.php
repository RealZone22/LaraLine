<?php

namespace RealZone22\LaraLine\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Button extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $color = 'info',
        public ?string $loading = null,
        public ?string $icon = null,
        public ?string $iconPosition = 'left',
        public ?string $link = null,
        public string $type = 'solid',
    ) {
        $this->uuid = 'laraline-button-'.Str::uuid();
    }

    public function loadingTarget(): ?string
    {
        if ($this->loading == 1) {
            return $this->attributes->whereStartsWith('wire:click')->first();
        }

        return $this->loading;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.buttons.button');
    }
}
