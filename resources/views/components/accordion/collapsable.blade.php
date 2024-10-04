@aware(['isAccordion' => null])

@if($isAccordion)
    <div
        {{ $attributes->class(['hs-accordion', 'active' => $active,
                                'bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700' => $bordered]) }}
        id="{{ $uuid }}" wire:key="{{ $uuid }}" {{ $attributes }}>
        <button
            {{ $header->attributes->class(['hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center
                gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500
                focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none
                dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400',
                $bordered => 'py-4 px-5']) }}
            aria-expanded="false" aria-controls="{{ $uuid }}" {{ $header->attributes }}>
            @if($showIcon)
                <i class="{{ $plusIcon }} hs-accordion-active:hidden block"></i>
                <i class="{{ $minusIcon }} hs-accordion-active:block hidden"></i>
            @endif
            {{ $header }}
        </button>
        <div id="{{ $uuid }}"
             {{ $content->attributes->class(['hs-accordion-content w-full overflow-hidden transition-[height] duration-300', $active ? 'block' : 'hidden']) }}
             role="region"
             aria-labelledby="{{ $uuid }}" {{ $content->attributes }}>
            <p class="text-gray-800 dark:text-neutral-200 {{ $bordered ? 'pb-4 px-5' : '' }}">
                {{ $content }}
            </p>
        </div>
    </div>
@else
    @if(!$bottom)
        <button type="button"
                {{ $header->attributes->class(['hs-collapse-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none']) }}
                id="{{ $uuid }}" aria-expanded="false" aria-controls="{{ $uuid }}-heading"
                data-hs-collapse="#{{ $uuid }}-heading" {{ $header->attributes }}>
            {{ $header }}
            <i class="{{ $arrowIcon }} hs-collapse-open:rotate-180"></i>
        </button>
    @endif
    <div id="{{ $uuid }}-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300"
         aria-labelledby="{{ $uuid }}" wire:key="{{ $uuid }}" {{ $content->attributes }}>
        <div class="mt-5">
            <p class="text-gray-500 dark:text-neutral-400">
                {{ $content }}
            </p>
        </div>
    </div>
    @if($bottom)
        <button type="button"
                {{ $header->attributes->class(['hs-collapse-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none']) }}
                id="{{ $uuid }}" aria-expanded="false" aria-controls="{{ $uuid }}-heading"
                data-hs-collapse="#{{ $uuid }}-heading" {{ $header->attributes }}>
            {{ $header }}
            <i class="{{ $arrowIcon }} hs-collapse-open:rotate-180"></i>
        </button>
    @endif
@endif
