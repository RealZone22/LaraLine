<?php

// config for RealZone22/LaraLine
return [
    'prefix' => '',

    'settings' => [
        'toast' => [
            'position' => 'top-right',
            'z-index' => 'z-50',
            'timeout' => 5000,
        ],

        'modal' => [
            'z-index' => 'z-50',
            'blur' => false,
            'size' => '2xl',
            'center' => true,
        ],

        'slide' => [
            'z-index' => 'z-50',
            'size' => '2xl',
            'position' => 'right',
        ],
    ],

    'colors' => [
        'alerts' => [
            'solid' => [
                'dark' => 'bg-gray-800 text-white dark:bg-white dark:text-neutral-800',
                'secondary' => 'bg-gray-500 text-white',
                'info' => 'bg-blue-600 text-white dark:bg-blue-500',
                'success' => 'bg-teal-500 text-white',
                'danger' => 'bg-red-500 text-white',
                'warning' => 'bg-yellow-500 text-white',
                'light' => 'bg-white text-gray-600',
            ],
            'soft' => [
                'dark' => 'bg-gray-100 border border-gray-200 text-gray-800 dark:bg-white/10 dark:border-white/20 dark:text-white',
                'secondary' => 'bg-gray-50 border border-gray-200 text-gray-600 dark:bg-white/10 dark:border-white/10 dark:text-neutral-400',
                'info' => 'bg-blue-100 border border-blue-200 text-blue-800 dark:bg-blue-800/10 dark:border-blue-900 dark:text-blue-500',
                'success' => 'bg-teal-100 border border-teal-200 text-teal-800 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500',
                'danger' => 'bg-red-100 border border-red-200 text-red-800 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500',
                'warning' => 'bg-yellow-100 border border-yellow-200 text-yellow-800 dark:bg-yellow-800/10 dark:border-yellow-900 dark:text-yellow-500',
                'light' => 'bg-white/10 border border-white/10 text-white',
            ],
        ],
        'avatars' => [
            'dark' => 'bg-gray-800 text-white dark:bg-white dark:text-neutral-800',
            'secondary' => 'bg-gray-500 text-white',
            'info' => 'bg-blue-600 text-white dark:bg-blue-500',
            'success' => 'bg-teal-500 text-white',
            'danger' => 'bg-red-500 text-white',
            'warning' => 'bg-yellow-500 text-white',
            'light' => 'bg-white text-gray-600',

            'online' => 'bg-green-500 text-white',
            'offline' => 'bg-gray-500 text-white',
            'busy' => 'bg-red-500 text-white',
            'away' => 'bg-yellow-500 text-white',
        ],
        'badges' => [
            'solid' => [
                'dark' => 'bg-gray-800 text-white dark:bg-white dark:text-neutral-800',
                'secondary' => 'bg-gray-500 text-white',
                'info' => 'bg-blue-600 text-white dark:bg-blue-500',
                'success' => 'bg-teal-500 text-white',
                'danger' => 'bg-red-500 text-white',
                'warning' => 'bg-yellow-500 text-white',
                'light' => 'bg-white text-gray-600',
            ],
            'soft' => [
                'dark' => 'bg-gray-100 text-gray-800 dark:bg-white/10 dark:text-white',
                'secondary' => 'bg-gray-50 text-gray-500 dark:bg-white/10 dark:text-white',
                'info' => 'bg-blue-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500',
                'success' => 'bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500',
                'danger' => 'bg-red-100 text-red-800 dark:bg-red-800/30 dark:text-red-500',
                'warning' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-800/30 dark:text-yellow-500',
                'light' => 'bg-white/10 text-white',
            ],
            'outline' => [
                'dark' => 'border border-gray-800 text-gray-800 dark:border-neutral-200 dark:text-white',
                'secondary' => 'border border-gray-500 text-gray-500 dark:text-neutral-400',
                'info' => 'border border-blue-600 text-blue-600 dark:text-blue-500',
                'success' => 'border border-teal-500 text-teal-500',
                'danger' => 'border border-red-500 text-red-500',
                'warning' => 'border border-yellow-500 text-yellow-500',
                'light' => 'border border-white text-white',
            ],
        ]
    ],

    'components' => [
        'accordion' => \RealZone22\LaraLine\View\Components\Accordion\Accordion::class,
        'collapsable' => \RealZone22\LaraLine\View\Components\Accordion\Collapsable::class,

        'alert' => \RealZone22\LaraLine\View\Components\Alerts\Alert::class,
        'alert.soft' => \RealZone22\LaraLine\View\Components\Alerts\AlertSoft::class,

        'avatar' => \RealZone22\LaraLine\View\Components\Avatars\Avatar::class,

        'badge' => RealZone22\LaraLine\View\Components\Badges\Badge::class,
        'badge.soft' => RealZone22\LaraLine\View\Components\Badges\BadgeSoft::class,
        'badge.outline' => RealZone22\LaraLine\View\Components\Badges\BadgeOutline::class,
    ],
];
