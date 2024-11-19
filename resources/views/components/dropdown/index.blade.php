@props(['uuid' => 'laraline-dropdown-' . str()->uuid()])

<div {{ $attributes->twMerge('m-1 hs-dropdown [--trigger:hover] relative inline-flex') }}
     x-dropdown:item
     x-data="{ item: '{{ $uuid }}' }">
    {{ $slot }}
</div>
