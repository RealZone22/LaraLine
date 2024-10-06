<!-- Slider -->
<div data-hs-carousel='{
    "loadingClasses": "opacity-0",

    @if($autoplay)
    "autoplay": true,
    @endif

    @if($multiple)
    "slidesQty": {
      "xs": 1,
      "lg": {{ $multiple }}
    },
    @endif

    @if($draggable)
    "isDraggable": true,
    @endif

    @if($centered)
    "isCentered": true,
    @endif

    @if($autoheight)
    "autoHeight": true,
    @endif

    @if($controls)
    "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"
    @endif
    }' class="relative" wire:key="{{ $uuid }}">
    <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
        <div {{ $attributes->class('hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0') }} {{ $attributes }}>
            {{ $slot }}
        </div>
    </div>

    @if($controls)
        <button type="button"
                class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="text-2xl" aria-hidden="true">
                <i class="icon-chevron-left"></i>
            </span>
        </button>
        <button type="button"
                class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="text-2xl" aria-hidden="true">
              <i class="icon-chevron-right"></i>
            </span>
        </button>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2"></div>
    @endif
</div>
<!-- End Slider -->
