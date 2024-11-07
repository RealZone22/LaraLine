@props([
    'type' => 'solid',
    'color' => 'info',
])

@inject('alertService', 'RealZone22\LaraLine\Services\LaraLine\AlertCvaService')

<div {{ $attributes->twMerge($alertService::new()([$type => $color])) }}>
    {{ $slot }}
</div>
