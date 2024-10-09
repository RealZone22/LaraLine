<?php

namespace RealZone22\LaraLine\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Toast extends Component
{
    public $toasts = [];

    #[On('laraline-toast')]
    public function toast($toast)
    {
        $this->toasts[] = $toast;
        $this->toasts = array_slice($this->toasts, -5, 5);
    }

    public function render()
    {
        return view('laraline::livewire.toast');
    }

}
