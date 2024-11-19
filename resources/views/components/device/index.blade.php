@props([
    'type' => 'mobile',
    'url' => url('/'),
])

@switch($type)
    @case('mobile')
        <figure class="mx-auto max-w-full w-60 h-auto">
            <div {{ $attributes->twMerge('p-1.5 bg-gray-800 shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:bg-neutral-600 dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)] rounded-3xl') }}>
                {{ $slot }}
            </div>
        </figure>
        @break

    @case('browser')
        <figure
            {{ $attributes->twMerge('ms-auto me-20 relative z-[1] max-w-full w-[50rem] h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)] rounded-b-lg') }}>
            <div
                class="relative flex items-center max-w-[50rem] bg-gray-800 rounded-t-lg py-2 px-24 dark:bg-neutral-700">
                <div class="flex gap-x-1 absolute top-2/4 start-4 -translate-y-1">
                    <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                    <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                    <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                </div>
                <div
                    class="flex justify-center items-center size-full bg-gray-700 text-[.25rem] text-gray-400 rounded-sm sm:text-[.5rem] dark:bg-neutral-600 dark:text-neutral-400">
                    {{ $url }}
                </div>
            </div>

            <div class="bg-gray-800 rounded-b-lg">
                {{ $slot }}
            </div>
        </figure>
        @break
@endswitch
