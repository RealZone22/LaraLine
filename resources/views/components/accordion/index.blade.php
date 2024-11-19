@props([
    'alwaysOpen' => false,
])
<div {{ $attributes->twMerge(['hs-accordion-group']) }} {{ $alwaysOpen ? 'data-hs-accordion-always-open' : '' }} wire:key="laraline-accordion-{{ str()->uuid() }}" x-data="{ isAccordion: true }" x-accordion>
    {{ $slot }}
</div>
