<div class="hs-carousel-slide">
    <div {{ $attributes->twMerge('flex justify-center h-full bg-gray-300 p-6 dark:bg-neutral-700') }}>
        <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">
            {{ $slot }}
        </span>
    </div>
</div>
