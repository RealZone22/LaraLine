<div class="inline-flex items-center" wire:key="{{ $uuid }}">
    <span class="size-2 inline-block rounded-full me-2 {{ config('laraline.colors.legend.'.$color) }}"></span>
    <span {{ $attributes->class('text-gray-600 dark:text-neutral-400') }}>
        {{ $slot }}
    </span>
</div>
