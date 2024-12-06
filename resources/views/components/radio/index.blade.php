@props([
    'uuid' => 'laraline-radio-'.str()->uuid(),
    'hint' => null,
])

<div class="flex">
    <input type="radio"
           {{ $attributes->twMerge('shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800') }}
           id="{{ $uuid }}">
    <label for="{{ $uuid }}" @class([
        'text-sm text-gray-500 ms-3 dark:text-neutral-400',
        'text-red-600' => $attributes->whereStartsWith('wire:model')->first() && $errors->has($attributes->whereStartsWith('wire:model')->first())
    ])>{{ $slot }}</label>
</div>
@if($attributes->whereStartsWith('wire:model')->first() && $errors->has($attributes->whereStartsWith('wire:model')->first()))
    <div class="text-red-600 text-sm">{{ $errors->first($attributes->whereStartsWith('wire:model')->first()) }}</div>
@endif
@if($hint)
    <div class="text-gray-400 py-1 pb-0 text-sm">{{ $hint }}</div>
@endif
