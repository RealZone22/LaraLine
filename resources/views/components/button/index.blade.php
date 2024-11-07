@props([
    'type' => 'solid',
    'color' => 'info',
    'link' => null,
    'loading' => null,
    'hint' => null,
])

@php
    function loadingTarget($attributes, $loading): ?string
    {
        if ($loading == 1) {
            return $attributes->whereStartsWith('wire:click')->first();
        }

        return $loading;
    }
@endphp

@inject('buttonService', 'RealZone22\LaraLine\Services\LaraLine\ButtonCvaService')

@if($link)
    <a {{ $attributes->twMerge($buttonService::new()([$type => $color])) }} href="{{ $link }}"
       @if($loading)
           wire:target="{{ loadingTarget($attributes, $loading) }}"
       wire:loading.attr="disabled"
        @endif
    >
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->twMerge($buttonService::new()([$type => $color])) }}
            @if($loading)
                wire:target="{{ loadingTarget($attributes, $loading) }}"
            wire:loading.attr="disabled"
        @endif
    >
        @if($loading)
            <span wire:loading wire:target="{{ loadingTarget($attributes, $loading) }}"
                  class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-white rounded-full"
                  role="status" aria-label="loading"></span>
        @endif

        {{ $slot }}
    </button>
@endif
@if($hint)
    <div class="text-gray-400 py-1 pb-0 text-sm">{{ $hint }}</div>
@endif
