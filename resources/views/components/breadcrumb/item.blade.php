@props([
    'icon' => 'icon-chevron-right',
])

<li class="inline-flex items-center">
    <a {{ $attributes->twMerge('flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500') }}>
        {{ $slot }}
    </a>
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
</li>
