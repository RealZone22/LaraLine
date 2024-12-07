@props([
    'uuid' => 'laraline-modal-' . str()->uuid()
])

<div {{ $attributes->twMerge('hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none') }} id="{{ $uuid }}"
     role="dialog" tabindex="-1" aria-labelledby="{{ $uuid }}-label"
     x-data="{ uuid: '{{ $uuid }}' }">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div
            class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            {{ $slot }}
        </div>
    </div>
</div>
