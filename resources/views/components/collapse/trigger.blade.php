@aware(['uuid' => 'null'])
@props([
    'plusIcon' => 'icon-plus',
    'minusIcon' => 'icon-minus',
    'arrowIcon' => 'icon-chevron-down',
    'showIcon' => true,
])

<button {{ $attributes->twMerge('hs-collapse-toggle hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400') }}
        aria-expanded="false" aria-controls="{{ $uuid }}-heading" data-hs-collapse="#{{ $uuid }}-heading" id="{{ $uuid }}">
    @if($showIcon)
        <i class="{{ $plusIcon }} hs-accordion-active:hidden block"></i>
        <i class="{{ $minusIcon }} hs-accordion-active:block hidden"></i>
    @endif
    {{ $slot }}
</button>
