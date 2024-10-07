<div class="hs-carousel-slide" wire:key="{{ $uuid }}">
    <div {{ $attributes->class('flex justify-center h-full bg-gray-100 p-6 dark:bg-neutral-900') }} {{ $attributes }}>
        <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">
            {{ $slot }}
        </span>
    </div>
</div>
