<div
    {{ $attributes->merge(['class' => 'hs-accordion ' . ($active ? 'active' : '') . ' ' .
        ($bordered ? 'bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700' : '')]) }}
    id="{{ $uuid }}">
    <button
        {{ $header->attributes->merge(['class' => 'hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center
        gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500
        focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none
        dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 ' .
        ($bordered ? 'py-4 px-5' : '')]) }}
        aria-expanded="{{ $active }}" aria-controls="{{ $uuid }}">

        @if($showIcon)
            <i class="{{ $plusIcon }} hs-accordion-active:hidden block"></i>
            <i class="{{ $minusIcon }} hs-accordion-active:block hidden"></i>
        @endif

        {{ $header }}
    </button>
    <div id="{{ $uuid }}"
         {{ $content->attributes->merge(['class' => 'hs-accordion-content w-full overflow-hidden transition-[height] duration-300 ' . ($active ? 'block' : 'hidden')]) }}
         role="region" aria-labelledby="{{ $uuid }}">
        <p class="text-gray-800 dark:text-neutral-200 {{ $bordered ? 'pb-4 px-5' : '' }}">
            {{ $content }}
        </p>
    </div>
</div>
