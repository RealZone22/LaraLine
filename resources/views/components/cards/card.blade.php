<div wire:key="{{ $uuid }}" {{ $attributes->class('flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70') }} {{ $attributes }}>
    @if($header)
        <div {{ $header->attributes->class('bg-gray-100 border-b rounded-t-xl py-3 md:py-4 dark:bg-neutral-900 dark:border-neutral-700') }} {{ $header->attributes }}>
            <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">
                {{ $header }}
            </p>
        </div>
    @endif

    @if($title)
        <h3 {{ $title->attributes->class('text-lg font-bold text-gray-800 dark:text-white') }} {{ $title->attributes }}>
            {{ $title }}
        </h3>
    @endif

    @if($subtitle)
        <p {{ $subtitle->attributes->class('mt-1 text-xs font-medium uppercase text-gray-500 dark:text-neutral-500') }} {{ $subtitle->attributes }}>
            {{ $subtitle }}
        </p>
    @endif

    <p class="my-2 text-gray-500 dark:text-neutral-400">
        {{ $slot }}
    </p>

    @if($footer)
        <div {{ $footer->attributes->class('bg-gray-100 border-t rounded-b-xl py-3 md:py-4 dark:bg-neutral-900 dark:border-neutral-700') }} {{ $footer->attributes }}>
            <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">
                {{ $footer }}
            </p>
        </div>
    @endif
</div>
