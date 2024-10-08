<div class="flex animate-pulse" x-data>
    <div class="ms-4 mt-2 w-full" x-init="
        $el.querySelectorAll('div').forEach(el => {
            el.classList.add('bg-gray-200');
        });
    ">
        {{ $slot }}
    </div>
</div>
