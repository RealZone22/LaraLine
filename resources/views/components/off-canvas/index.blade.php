@props([
    'uuid' => 'laraline-off-canvas-' . str()->uuid(),
    'position' => 'right'
])

@switch($position)
    @case('left')
        <div id="{{ $uuid }}"
             {{ $attributes->twMerge('hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-e dark:bg-neutral-800 dark:border-neutral-700') }}
             role="dialog" tabindex="-1" aria-labelledby="{{ $uuid }}-label">
            {{ $slot }}
        </div>
        @break
    @case('right')
        <div id="{{ $uuid }}"
             {{ $attributes->twMerge('hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-s dark:bg-neutral-800 dark:border-neutral-700') }}
             role="dialog" tabindex="-1" aria-labelledby="{{ $uuid }}-label">
            {{ $slot }}
        </div>
        @break
@endswitch
