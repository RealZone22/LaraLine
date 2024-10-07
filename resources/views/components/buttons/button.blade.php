@if($link)
    <a href="{{ $link }}"
       {{ $attributes->class('py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent disabled:opacity-50 disabled:pointer-events-none ' . config('laraline.colors.buttons.'. $type .'.' . $color)) }}
       @if($loading)
           wire:target="{{ $loadingTarget() }}"
       wire:loading.attr="disabled"
        @endif
        {{ $attributes }}>
        @else
            <button wire:key="{{ $uuid }}"
                    {{ $attributes->class('py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent disabled:opacity-50 disabled:pointer-events-none ' . config('laraline.colors.buttons.'. $type .'.' . $color)) }}
                    @if($loading)
                        wire:target="{{ $loadingTarget() }}"
                    wire:loading.attr="disabled"
                @endif
                {{ $attributes }}>
                @endif

                @if($loading && !$link)
                    <span wire:loading wire:target="{{ $loadingTarget() }}"
                          class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-white rounded-full"
                          role="status" aria-label="loading"></span>
                @endif

                @if($iconPosition === 'left' && $icon)
                    <i class="{{ $icon }}" @if($loading) wire:loading.class="hidden" wire:target="{{ $loadingTarget() }}" @endif></i>
                @endif

                {{ $slot }}

                @if($iconPosition === 'right')
                    <i class="{{ $icon }}"></i>
                @endif
            </button>
            @if($link)
    </a>
    @else
        </button>
@endif
