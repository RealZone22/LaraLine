@props([
    'uuid' => 'laraline-password-' . str()->uuid(),
    'label' => null,
    'hint' => null,
    'showToggle' => true,
    'showStrength' => false,
    'minLength' => 8,
])
@if($label)
    <label for="{{ $uuid }}" class="block text-sm font-medium mb-2 dark:text-white">{{ $label }}</label>
@endif

<div @class([
    'relative' => $showToggle,
    'flex-1' => $showStrength,
    ])>
    <input id="{{ $uuid }}" type="password"
        {{ $attributes->twMerge('py-3 ps-4 pe-10 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600') }}
    >

    @if($showStrength)
        <div data-hs-strong-password='{
        "target": "#{{ $uuid }}",
        "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-teal-500 h-2 flex-auto rounded-full bg-blue-500 opacity-50 mx-1",
        "minLength": "{{ $minLength }}"
      }' class="flex mt-2 -mx-1"></div>
    @endif

    @if($showToggle)
        <button type="button" data-hs-toggle-password='{
          "target": "#{{ $uuid }}"
        }'
                class="absolute inset-y-0 end-0 flex justify-center items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">

            <i class="icon-eye-off hidden hs-password-active:block"></i>
            <i class="icon-eye hs-password-active:hidden"></i>
        </button>
    @endif
</div>

<div>
    @if($attributes->whereStartsWith('wire:model')->first() && $errors->has($attributes->whereStartsWith('wire:model')->first()))
        <div class="text-red-600 text-sm">{{ $errors->first($attributes->whereStartsWith('wire:model')->first()) }}</div>
    @endif

    @if($hint)
        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">{{ $hint }}</p>
    @endif
</div>
