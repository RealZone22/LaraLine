@props([
    'uuid' => 'laraline-clipboard-' . str()->uuid(),
    'clipboardIcon' => 'icon-clipboard',
    'clipboardSuccessIcon' => 'clipboard-check',
])

<div class="inline-flex items-center gap-x-3">
    <div id="{{ $uuid }}" {{ $attributes->twMerge('text-sm font-medium text-gray-800 dark:text-white') }}>
        {{ $slot }}
    </div>

    <button type="button"
            class="js-clipboard-example p-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
            data-clipboard-target="#{{ $uuid }}" data-clipboard-action="copy" data-clipboard-success-text="{{ trans('laraline::messages.copied') }}">
        <i class="{{ $clipboardIcon }} js-clipboard-default size-4 group-hover:rotate-6 transition"></i>
        <i class="{{ $clipboardSuccessIcon }} js-clipboard-success hidden size-4 text-blue-600"></i>
    </button>
</div>
