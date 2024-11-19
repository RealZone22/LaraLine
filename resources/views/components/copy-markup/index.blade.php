@props([
    'target' => null,
    'wrapper' => null,
    'limit' => 3,
])

<p class="mt-3 text-end">
    <button type="button" data-hs-copy-markup='{
      "targetSelector": "#{{ $target }}",
      "wrapperSelector": "#{{ $wrapper }}",
      "limit": {{ $limit }}
    }' {{ $attributes->twMerge('py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-full border border-dashed border-gray-200 bg-white text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700') }}>
        {{ $slot }}
    </button>
</p>
