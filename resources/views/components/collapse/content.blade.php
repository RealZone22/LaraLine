<div x-bind:id="`${item}-heading`"
     {{ $attributes->twMerge('hs-collapse hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden') }}
     role="region" x-bind:aria-labelledby="item">
    <p class="text-gray-800 dark:text-neutral-200">
        {{ $slot }}
    </p>
</div>
