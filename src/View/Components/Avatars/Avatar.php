<?php

namespace RealZone22\LaraLine\View\Components\Avatars;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Avatar extends Component
{
    public $uuid;
    public $statusPosition;
    public $statusSize;
    public $initialSize;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string  $color = null,

        public ?string $src = null,
        public ?string $alt = null,
        public ?string $initials = null,

        public string  $size = 'md',
        public string  $position = 'top-right',
    )
    {
        switch ($this->position) {
            case 'top-left':
                $this->statusPosition = 'left-0 top-0';
                break;
            case 'top-right':
                $this->statusPosition = 'right-0 top-0';
                break;
            case 'bottom-left':
                $this->statusPosition = 'left-0 bottom-0';
                break;
            case 'bottom-right':
                $this->statusPosition = 'right-0 bottom-0';
                break;
        }

        switch ($this->size) {
            case 'xs':
                $this->size = 'w-6 h-6';
                $this->statusSize = 'w-2 h-2';
                $this->initialSize = 'text-xs';
                break;
            case 'sm':
                $this->size = 'w-8 h-8';
                $this->statusSize = 'w-2.5 h-2.5';
                $this->initialSize = 'text-sm';
                break;
            case 'md':
                $this->size = 'w-10 h-10';
                $this->statusSize = 'w-3 h-3';
                $this->initialSize = 'text-base';
                break;
            case 'lg':
                $this->size = 'w-12 h-12';
                $this->statusSize = 'w-3.5 h-3.5';
                $this->initialSize = 'text-lg';
                break;
            case 'xl':
                $this->size = 'w-16 h-16';
                $this->statusSize = 'w-4 h-4';
                $this->initialSize = 'text-xl';
                break;
        }

        $this->uuid = 'laraline-avatar-' . Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.avatars.avatar');
    }
}
