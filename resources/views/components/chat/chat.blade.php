<ul class="space-y-5" wire:key="{{ $uuid }}">

    @if(!$right)
        <li class="max-w-lg flex gap-x-2 sm:gap-x-4 me-11">
            <div>
                {{ $avatar }}
            </div>

            <div>
                <div {{ $attributes->class('bg-white border border-gray-200 rounded-2xl p-4 space-y-3 dark:bg-neutral-900 dark:border-neutral-700') }} {{ $attributes }}>
                    <p class="text-sm dark:text-white">
                        {{ $slot }}
                    </p>
                </div>

                @if($footer)
                    <span {{ $footer->attributes->class('mt-1.5 flex items-center gap-x-1 text-xs text-gray-500 dark:text-neutral-500') }} {{ $footer->attributes }}>
                        {{ $footer }}
                    </span>
                @endif
            </div>
        </li>
    @else
        <li class="flex ms-auto gap-x-2 sm:gap-x-4">
            <div class="grow text-end space-y-3">
                <div class="inline-flex flex-col justify-end">
                    <div {{ $attributes->class('bg-white border border-gray-200 rounded-2xl p-4 space-y-3 dark:bg-neutral-900 dark:border-neutral-700') }} {{ $attributes }}>
                        <p class="text-sm dark:text-white">
                            {{ $slot }}
                        </p>
                    </div>

                    @if($footer)
                        <span {{ $footer->attributes->class('mt-1.5 flex items-center gap-x-1 text-xs text-gray-500 dark:text-neutral-500') }} {{ $footer->attributes }}>
                            {{ $footer }}
                        </span>
                    @endif
                </div>
            </div>

            <div>
                {{ $avatar }}
            </div>
        </li>
    @endif
</ul>
