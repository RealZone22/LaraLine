@aware(['uuid' => 'null'])

<div id="{{ $uuid }}-heading" {{ $attributes->twMerge('hs-collapse hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden') }}
role="region" aria-labelledby="{{ $uuid }}">
    <p class="text-gray-800 dark:text-neutral-200">
        {{ $slot }}
    </p>
</div>
