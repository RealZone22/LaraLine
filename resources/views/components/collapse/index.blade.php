@aware(['collapsible' => null])
@props([
    'uuid' => 'laraline-collapse-' . str()->uuid(),
])

@if($collapsible)
    <div class="hs-accordion" wire:key="{{ $uuid }}" id="{{ $uuid }}">
        {{ $slot }}
    </div>
@else
    <div wire:key="{{ $uuid }}" id="{{ $uuid }}">
        {{ $slot }}
    </div>
@endif
