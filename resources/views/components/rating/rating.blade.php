<div class="flex flex-row-reverse items-center" wire:key="{{ $uuid }}">
    @for($i = 1; $i <= $amount; $i++)
        <input id="{{ $uuid }}_{{ $i }}" type="radio"
               class="peer -ms-5 size-6 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
               name="hs-ratings-readonly" value="{{ $amount - $i + 1 }}" {{ $attributes->whereStartsWith('wire:model') }}>
        <label for="{{ $uuid }}_{{ $i }}"
            {{ $attributes->class('peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600') }}>
            <i class="{{ $icon }} text-xl"></i>
        </label>
    @endfor
</div>
