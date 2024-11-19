@props([
  'type' => 'graybg',
])
@inject('kbdService', 'RealZone22\LaraLine\Services\LaraLine\KBDCvaService')

<span class="flex flex-wrap items-center gap-x-1 text-sm text-gray-600 dark:text-neutral-400">
  <kbd {{ $attributes->twMerge($kbdService::new()(['type' => $type])) }}>
    {{ $slot }}
  </kbd>
</span>
