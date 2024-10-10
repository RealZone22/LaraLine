<div
    {{ $attributes->class('animate-spin inline-block size-6 border-[3px] border-current border-t-transparent rounded-full ' . config('laraline.colors.spinners.'.$color)) }} wire:key="{{ $uuid }}" role="status" aria-label="loading">
    <span class="sr-only">{{ trans('laraline::messages.loading') }}</span>
    {{ $slot }}
</div>
