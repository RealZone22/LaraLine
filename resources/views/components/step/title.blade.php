<div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
      <span
          {{ $attributes->twMerge('size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-neutral-700 dark:text-white') }}>
            {{ $slot }}
      </span>
    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-neutral-700"></div>
</div>
