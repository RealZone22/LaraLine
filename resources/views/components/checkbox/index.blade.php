@props([
    'uuid' => 'laraline-checkbox-'.str()->uuid(),
    'hint' => null,
])

<div class="flex">
    <input type="checkbox"
           {{ $attributes->twMerge('shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800') }}
           id="{{ $uuid }}" wire:model="test">
    <label for="{{ $uuid }}" @class([
        'text-sm text-gray-500 ms-3 dark:text-neutral-400',
        'text-red-600' => $attributes->whereStartsWith('wire:model')->first() && $errors->has($attributes->whereStartsWith('wire:model')->first())
    ])>{{ $slot }}</label>
</div>
@error($attributes->whereStartsWith('wire:model')->first())
    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
@enderror
@if($hint)
    <div class="text-gray-400 py-1 pb-0 text-sm">{{ $hint }}</div>
@endif