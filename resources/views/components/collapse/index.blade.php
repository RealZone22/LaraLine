@props(['uuid' => 'laraline-collapse-' . str()->uuid()])

<div :class="{'hs-accordion': isInsideAccordion}" x-accordion:item
     x-data="{ item: '{{ $uuid }}', isInsideAccordion: false }"
     x-init="isInsideAccordion = ($el.closest('[x-data]') && $el.closest('[x-data]').__x) ? $el.closest('[x-data]').__x.$data.isAccordion : false"
    {{ $attributes->twMerge('') }}>
    {{ $slot }}
</div>
