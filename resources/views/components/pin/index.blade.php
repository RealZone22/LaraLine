@props([
    'amount' => 6,
    'hint' => null,
])
<div class="flex gap-x-3" data-hs-pin-input="">
    @for ($i = 0; $i < $amount; $i++)
        @if ($i === 0)
            <input data-hs-pin-input-item=""
                   autofocus="" {{ $attributes->twMerge('block w-[38px] text-center border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600') }}>
        @else
            <input data-hs-pin-input-item=""
                {{ $attributes->twMerge('block w-[38px] text-center border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600') }}>
        @endif
    @endfor
</div>
<div>
    @if($attributes->whereStartsWith('wire:model')->first() && $errors->has($attributes->whereStartsWith('wire:model')->first()))
        <div class="text-red-600 text-sm">{{ $errors->first($attributes->whereStartsWith('wire:model')->first()) }}</div>
    @endif

    @if($hint)
        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">{{ $hint }}</p>
    @endif
</div>
