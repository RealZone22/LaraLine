<?php

namespace RealZone22\LaraLine\Traits;

use Illuminate\Support\Str;

trait Toast
{
    public function toast(
        $title,
        $message,
        $type = 'success',
        $timeout = 5000,
        $position = 'top-end',
        $icon = null,
        $actions = [],
        $loading = false,
        $loadingColor = 'blue',
        $redirectTo = null,
        $useNavigation = true
    )
    {
        $toast = [
            'title' => $title,
            'message' => $message,
            'type' => $type,
            'timeout' => $timeout,
            'position' => $position,
            'icon' => $icon,
            'actions' => $actions,
            'loading' => $loading,
            'loadingColor' => $loadingColor,
            'uuid' => 'laraline-toast-' . Str::uuid(),
        ];

        $this->dispatch('laraline-toast', $toast);
        session()->flash('laraline-toast', $toast);

        if ($redirectTo) {
            return $this->redirect($redirectTo, $useNavigation);
        }

        return null;
    }
}
