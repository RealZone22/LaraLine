@props([
    'value' => 0,
    'max' => 100,
    'min' => 0,
])

<div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar"
     aria-valuenow="{{ $value }}" aria-valuemin="{{ $min }}" aria-valuemax="{{ $max }}">
    <div
        {{ $attributes->twMerge('flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500') }}
        style="width: {{ $value }}%"></div>
</div>
