@if($slot)
    @if($position == 'left')
        <div {{ $attributes->class('py-3 flex items-center text-sm text-gray-800 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:after:border-neutral-600') }}>
            {{ $slot }}
        </div>
    @elseif($position == 'center')
        <div {{ $attributes->class('py-3 flex items-center text-sm text-gray-800 before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-neutral-600 dark:after:border-neutral-600') }}>
            {{ $slot }}
        </div>
    @elseif($position == 'right')
        <div {{ $attributes->class('py-3 flex items-center text-sm text-gray-800 before:flex-1 before:border-t before:border-gray-200 before:me-6 dark:text-white dark:before:border-neutral-600') }}>
            {{ $slot }}
        </div>
    @endif
@else
    <hr {{ $attributes->class('my-2 border-1 dark:border-dark-600 border-gray-300') }}>
@endif
