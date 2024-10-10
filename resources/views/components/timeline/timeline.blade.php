@if($header)
    <div class="ps-2 my-2 first:mt-0">
        <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-neutral-400">
            {{ $header }}
        </h3>
    </div>
@endif

<div {{ $attributes->class(['flex gap-x-3', 'relative group rounded-lg hover:bg-gray-100 dark:hover:bg-white/10' => $hover]) }} wire:key="{{ $uuid }}">
    @if($hover)
        <a class="z-[1] absolute inset-0 cursor-pointer" {{ $attributes }}></a>
    @endif

    <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
        <div class="relative z-10 size-7 flex justify-center items-center">
            @if($icon)
                {!! $icon !!}
            @else
                <div class="size-2 rounded-full bg-gray-400 dark:bg-neutral-600"></div>
            @endif
        </div>
    </div>

    <div class="grow pt-0.5 pb-8">
        <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
            {{ $title }}
        </h3>
        <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
            {{ $content }}
        </p>
        {{ $slot }}
    </div>
</div>
