@props([
    'collapsible' => true,
    'alwaysOpen' => false,
    'uuid' => 'laraline-accordion-' . str()->uuid(),
])
<div {{ $attributes->twMerge(['hs-accordion-group']) }} {{ $alwaysOpen ? 'data-hs-accordion-always-open' : '' }} wire:key="{{ $uuid }}">
    {{ $slot }}
</div>
