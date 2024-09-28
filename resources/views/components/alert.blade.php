<div {{ $attributes->merge(['class' => 'mt-2 text-sm rounded-lg p-4 ' . $color]) }} role="alert" tabindex="-1" id="{{ $uuid }}"
     aria-labelledby="hs-with-description-label">
    <div class="flex">
        <div class="shrink-0">
            <i class="{{ $icon }} text-lg"></i>
        </div>
        <div class="ms-4 flex flex-col justify-center">
            @if($title)
                <h3 id="hs-with-description-label" {{ $title->attributes->merge(['class' => 'text-sm font-semibold']) }}>
                    {{ $title }}
                </h3>
            @endif
            @if ($description)
                <div {{ $description->attributes->merge(['class' => 'mt-1 text-sm']) }}>
                    {{ $description }}
                </div>
            @endif

            @if($actions)
                <div class="mt-4">
                    <div {{ $actions->attributes->merge(['class' => 'flex gap-x-3']) }}>
                        {{ $actions }}
                    </div>
                </div>
            @endif
        </div>
        @if($dismissible)
            <div class="ps-3 ms-auto">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button"
                            class="inline-flex bg-teal-50 rounded-lg p-1.5 text-red-500 hover:bg-red-100 focus:outline-none focus:bg-red-100 dark:bg-transparent dark:text-red-600 dark:hover:bg-red-800/50 dark:focus:bg-red-800/50"
                            data-hs-remove-element="#{{ $uuid }}">
                        <i class="icon-x text-lg"></i>
                    </button>
                </div>
            </div>
        @endif
    </div>
</div>
