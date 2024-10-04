<div {{ $attributes->class(['hs-accordion-group']) }} {{ $alwaysOpen ? 'data-hs-accordion-always-open' : '' }} wire:key="{{ $uuid }}" {{ $attributes }}>
    {{ $slot }}
</div>
