@props([
    'uuid' => 'laraline-input-' . str()->uuid(),
    'label' => null,
    'hint' => null,
])

@if($label)
    <label for="{{ $uuid }}" class="block text-sm font-medium mb-2 dark:text-white">{{ $label }}</label>
@endif

<input id="{{ $uuid }}"
    {{ $attributes->twMerge('py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600') }}>

@error($attributes->whereStartsWith('wire:model')->first())
<div class="text-red-500 text-sm mt-1">{{ $message }}</div>
@enderror

@if($hint)
    <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">{{ $hint }}</p>
@endif
