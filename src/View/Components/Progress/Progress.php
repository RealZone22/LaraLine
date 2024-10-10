<?php

namespace RealZone22\LaraLine\View\Components\Progress;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Progress extends Component
{
    public $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $min = 0,
        public int $max = 100,
        public int $value = 0,
        public string $type = 'progress',

        public mixed $label = null,
        public string $color = 'blue',
        public bool $inline = false,
    ) {
        $this->uuid = 'laraline-progress-'.Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.progress.progress');
    }
}
