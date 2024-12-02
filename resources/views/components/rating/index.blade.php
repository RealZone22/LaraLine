@props([
    'amount' => 5,
    'uuid' => 'laraline-rating-' . str()->uuid(),
    'icon' => 'icon-star',
])

<div class="flex flex-row-reverse items-center">
    @for($i = 1; $i <= $amount; $i++)
        <input id="{{ $uuid }}_{{ $i }}" type="radio"
               class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
               name="{{ $uuid }}" value="{{ $amount - $i + 1 }}">
        <label for="{{ $uuid }}_{{ $i }}"
               {{ $attributes->twMerge('peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600') }}>
            <i class="{{ $icon }} text-xl"></i>
        </label>
    @endfor
</div>
