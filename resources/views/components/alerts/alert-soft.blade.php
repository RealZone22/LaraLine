<div
    {{ $attributes->class('mt-2 text-sm rounded-lg p-4 ' . config('laraline.colors.alerts.soft.' . $color)) }}
    role="alert" tabindex="-1" aria-labelledby="{{ $uuid }}" wire:key="{{ $uuid }}" id="{{ $uuid }}" {{ $attributes }}>
    <x-laraline::alerts.content/>
</div>
