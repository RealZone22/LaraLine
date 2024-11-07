@props([
    'type' => 'solid',
    'color' => 'info',
])

@inject('badgeService', 'RealZone22\LaraLine\Services\LaraLine\BadgeCvaService')

<span {{ $attributes->twMerge($badgeService::new()([$type => $color])) }}>
    {{ $slot }}
</span>
