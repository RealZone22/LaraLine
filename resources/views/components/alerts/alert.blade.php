<div
    {{ $attributes->class('mt-2 text-sm rounded-lg p-4 ' . config('laraline.colors.alerts.'. $type .'.' . $color)) }}
    role="alert" tabindex="-1" aria-labelledby="{{ $uuid }}" id="{{ $uuid }}" wire:key="{{ $uuid }}" {{ $attributes }}>
    <div class="flex">
        @if($icon)
            <div class="shrink-0">
                <i class="{{ $icon }} text-base mt-0.5"></i>
            </div>
        @endif
        <div class="ms-4">
            @if($header)
                <h3 {{ $header->attributes->class('text-sm font-semibold') }} {{ $header->attributes }}>
                    {{ $header }}
                </h3>
            @endif

            @if($content)
                <div {{ $content->attributes->class('mt-1 text-sm') }} {{ $content->attributes }}>
                    {{ $content }}
                </div>
            @endif

            @if($actions)
                <div class="mt-4">
                    <div {{ $actions->attributes->class('flex gap-x-3') }} {{ $actions->attributes }}>
                        {{ $actions }}
                    </div>
                </div>
            @endif
        </div>
        @if($dismissible)
            <div class="ps-3 ms-auto">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button"
                            class="inline-flex rounded-lg p-1.5 py-1 hover:opacity-50"
                            data-hs-remove-element="#{{ $uuid }}">
                        <i class="icon-x text-base"></i>
                    </button>
                </div>
            </div>
        @endif
    </div>
</div>
