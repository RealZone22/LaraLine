<div {{ $attributes->merge(['class' => 'hs-accordion-group']) }} {{ $keepOpen ? 'data-hs-accordion-always-open' : '' }}>
    {{ $slot }}
</div>
