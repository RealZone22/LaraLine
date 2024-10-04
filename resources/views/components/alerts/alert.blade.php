<div
    {{ $attributes->class('mt-2 text-sm rounded-lg p-4 ' . config('laraline.colors.alerts.solid.' . $color)) }}
    role="alert" tabindex="-1" aria-labelledby="{{ $uuid }}" id="{{ $uuid }}" wire:key="{{ $uuid }}" {{ $attributes }}>
    <x-laraline::alerts.content/>
</div>
