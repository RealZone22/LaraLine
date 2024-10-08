@if($type == 'desktop')
    <figure wire:key="{{ $uuid }}"
        class="ms-auto me-20 relative z-[1] max-w-full w-[50rem] h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)] rounded-b-lg">
        <div class="relative flex items-center max-w-[50rem] bg-gray-800 rounded-t-lg py-2 px-24 dark:bg-neutral-700">
            <div class="flex gap-x-1 absolute top-2/4 start-4 -translate-y-1">
                <span class="size-3 bg-red-600 rounded-full"></span>
                <span class="size-3 bg-yellow-300 rounded-full"></span>
                <span class="size-3 bg-green-500 rounded-full"></span>
            </div>
            <div
                class="flex justify-center items-center size-full bg-gray-700 text-[.25rem] text-gray-400 rounded-sm sm:text-sm dark:bg-neutral-600 dark:text-neutral-400">
                {{ $url }}
            </div>
        </div>

        <div {{ $attributes->class('p-2 bg-gray-800 text-white rounded-b-lg') }} {{ $attributes }}>
            {{ $slot }}
        </div>
    </figure>
@elseif($type == 'mobile')
    <figure class="mx-auto max-w-full w-60 h-auto" wire:key="{{ $uuid }}">
        <div {{ $attributes->class('p-1.5 bg-gray-800 shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:bg-neutral-600 dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)] rounded-3xl') }}>
            {{ $slot }}
        </div>
    </figure>
@endif
