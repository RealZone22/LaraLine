<span {{ $attributes->class('inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium ' . config('laraline.colors.badges.' . $type . '.' . $color)) }}
    {{ $attributes }}>
    {{ $slot }}
</span>
