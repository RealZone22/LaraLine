<div>
    @if($type == 'progress')
        @if($label)
            <div class="mb-2 flex justify-between items-center">
                <h3 class="text-sm font-semibold text-gray-800 dark:text-white">{{ $label }}</h3>
                <span class="text-sm text-gray-800 dark:text-white">{{ $value }}%</span>
            </div>
        @endif
        <div
            {{ $attributes->class(['flex w-full bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700', 'h-4' => $inline, 'h-1.5' => ! $inline]) }}
            role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="{{ $min }}" aria-valuemax="{{ $max }}">
            <div
                class="flex flex-col justify-center rounded-full overflow-hidden text-xs text-white text-center whitespace-nowrap transition duration-500 {{ config('laraline.colors.progress.progress.'.$color) }}"
                style="width: {{ $value }}%">
                @if($inline)
                    {{ $value }}%
                @endif
            </div>
        </div>
    @elseif($type == 'circle')
        <div class="relative size-40">
            <svg class="size-full -rotate-90" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-neutral-700"
                        stroke-width="2"></circle>

                <circle cx="18" cy="18" r="16" fill="none"
                        class="stroke-current {{ config('laraline.colors.progress.circle_gauge.'.$color) }}"
                        stroke-width="2" stroke-dasharray="{{ $max }}" stroke-dashoffset="{{$max - $value }}"
                        stroke-linecap="round"></circle>
            </svg>

            <div class="absolute top-1/2 start-1/2 transform -translate-y-1/2 -translate-x-1/2">
                <span
                    class="text-center text-2xl font-bold {{ config('laraline.colors.progress.circle_gauge.'.$color) }}">{{ $value }}%</span>
            </div>
        </div>
    @elseif($type == 'gauge')
        <div class="relative size-40">
            <svg class="rotate-[135deg] size-full" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-neutral-700"
                        stroke-width="1.5" stroke-dasharray="75 {{ $max }}" stroke-linecap="round"></circle>

                <circle cx="18" cy="18" r="16" fill="none"
                        class="stroke-current {{ config('laraline.colors.progress.circle_gauge.'.$color) }}"
                        stroke-width="1.5" stroke-dasharray="{{ $value }} {{ $max }}" stroke-linecap="round"></circle>
            </svg>

            <div class="absolute top-1/2 start-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                <span
                    class="text-4xl font-bold {{ config('laraline.colors.progress.circle_gauge.'.$color) }}">{{ $value }}</span>
                <span class="block {{ config('laraline.colors.progress.circle_gauge.'.$color) }}">{{ $label }}</span>
            </div>
        </div>
    @endif
</div>
