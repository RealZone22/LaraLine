@props([
    'position' => null,
])

@switch($position)

    @case('start')
        <div
            {{ $attributes->twMerge('py-3 flex items-center text-sm text-gray-800 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:after:border-neutral-600') }}>
            {{ $slot }}
        </div>
        @break

    @case('middle')
        <div
            {{ $attributes->twMerge('py-3 flex items-center text-sm text-gray-800 before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-neutral-600 dark:after:border-neutral-600') }}>
            {{ $slot }}
        </div>
        @break

    @case('end')
        <div
            {{ $attributes->twMerge('py-3 flex items-center text-sm text-gray-800 before:flex-1 before:border-t before:border-gray-200 before:me-6 dark:text-white dark:before:border-neutral-600') }}>
            {{ $slot }}
        </div>
        @break

    @default
        <hr {{ $attributes->twMerge('my-10') }}>
        @break

@endswitch