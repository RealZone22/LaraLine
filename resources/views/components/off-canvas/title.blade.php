<div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
    <h3 :id="`${uuid}-label" {{ $attributes->twMerge('font-bold text-gray-800 dark:text-white') }}>
        {{ $slot }}
    </h3>
    <button type="button"
            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
            aria-label="Close" :data-hs-overlay="`#${uuid}`">
        <span class="sr-only">{{ trans('laraline::messages.close') }}</span>
        <i class="icon-x"></i>
    </button>
</div>
