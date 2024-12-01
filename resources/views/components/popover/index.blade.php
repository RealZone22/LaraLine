@props([
    'position' => 'top'
])

<div {{ $attributes->twMerge('hs-tooltip [--trigger:click] [--placement:'. $position .'] inline-block') }}>
    {{ $slot }}
</div>
