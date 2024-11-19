<div
    {{ $attributes->twMerge('hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full') }}
    role="menu" aria-orientation="vertical" x-bind:aria-labelledby="`${item}`">
    <div class="p-1 space-y-0.5">
        {{ $slot }}
    </div>
</div>
