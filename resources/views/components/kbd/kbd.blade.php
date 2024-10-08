@if($type == 'gray')
    <kbd wire:key="{{ $uuid }}" {{ $attributes->class('inline-flex items-center font-mono text-sm text-gray-400 dark:text-neutral-600') }}>
        {{ $slot }}
    </kbd>
@elseif($type == 'text')
    <kbd wire:key="{{ $uuid }}" {{ $attributes->class('inline-flex items-center font-mono text-sm text-gray-800 dark:text-neutral-200') }}>
        {{ $slot }}
    </kbd>
@elseif($type == 'graybg')
    <kbd wire:key="{{ $uuid }}" {{ $attributes->class('min-h-[30px] inline-flex justify-center items-center py-1 px-1.5 bg-gray-200 border border-transparent font-mono text-sm text-gray-800 rounded-md dark:bg-neutral-700 dark:text-neutral-200') }}>
        {{ $slot }}
    </kbd>
@elseif($type == 'bg')
    <kbd wire:key="{{ $uuid }}" {{ $attributes->class('min-h-[30px] inline-flex justify-center items-center py-1 px-1.5 bg-white border border-gray-200 font-mono text-sm text-gray-800 rounded-md dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200') }}>
        {{ $slot }}
    </kbd>
@elseif($type == 'shadow')
    <kbd wire:key="{{ $uuid }}" {{ $attributes->class('min-h-[30px] inline-flex justify-center items-center py-1 px-1.5 bg-white border border-gray-200 font-mono text-sm text-gray-800 shadow-[0px_2px_0px_0px_rgba(0,0,0,0.08)] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:shadow-[0px_2px_0px_0px_rgba(255,255,255,0.1)] rounded-md') }}>
        {{ $slot }}
    </kbd>
@endif
