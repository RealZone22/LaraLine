<div class="relative inline-block" wire:key="{{ $uuid }}">
    @if($initials)
        <span
            {{ $attributes->class(['inline-flex items-center justify-center rounded-full bg-gray-500 font-semibold text-white leading-none ' . $initialSize . ' ' . $size]) }}
            {{ $attributes }}>
          {{ $initials }}
        </span>
    @else
        <img {{ $attributes->class(['inline-block rounded-full ' . $size]) }} src="{{ $src }}"
             alt="{{ $alt }}" {{ $attributes }}>
    @endif

    @if($color)
        <span
            class="absolute block rounded-full ring-2 ring-white bg-gray-400 dark:ring-neutral-900 {{ $statusSize }} {{ $statusPosition }} {{ config('laraline.colors.avatars.'. $color) }}"></span>
    @endif
</div>
