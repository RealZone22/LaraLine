<?php

// config for RealZone22/LaraLine
return [
    'prefix' => '',
    'identifier' => 'laraline',


    'settings' => [
        'toast' => [
            'position' => 'top-right',
            'z-index' => 'z-50',
            'timeout' => 5000,
            'variant' => 'soft',
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
        ],
        'buttons' => [
            'solid' => [
                'dark' => 'bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:bg-gray-900 dark:bg-white dark:text-neutral-800',
                'secondary' => 'bg-gray-500 text-white hover:bg-gray-600 focus:outline-none focus:bg-gray-600',
                'info' => 'bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 focus:outline-none focus:bg-blue-700',
                'success' => 'bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600',
                'danger' => 'bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600',
                'warning' => 'bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600',
                'light' => 'bg-white text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200',
            ],
            'outline' => [
                'dark' => 'border-gray-800 text-gray-800 hover:border-gray-500 hover:text-gray-500 focus:outline-none focus:border-gray-500 focus:text-gray-500 dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300',
                'secondary' => 'border-gray-500 text-gray-500 hover:border-gray-800 hover:text-gray-800 focus:outline-none focus:border-gray-800 focus:text-gray-800 dark:border-neutral-400 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hover:border-neutral-300',
                'info' => 'border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 focus:outline-none focus:border-blue-500 focus:text-blue-500 dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400',
                'success' => 'border-teal-500 text-teal-500 hover:border-teal-400 hover:text-teal-400 focus:outline-none focus:border-teal-400 focus:text-teal-400',
                'danger' => 'border-red-500 text-red-500 hover:border-red-400 hover:text-red-400 focus:outline-none focus:border-red-400 focus:text-red-400',
                'warning' => 'border-yellow-500 text-yellow-500 hover:border-yellow-400 focus:outline-none focus:border-yellow-400 focus:text-yellow-400',
                'light' => 'border-white text-white hover:border-white/70 hover:text-white/70 focus:outline-none focus:border-white/70 focus:text-white/70',
            ],
            'ghost' => [
                'dark' => 'text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700',
                'secondary' => 'text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800',
                'info' => 'text-blue-600 hover:bg-blue-100 focus:outline-none focus:bg-blue-100 hover:text-blue-800 focus:outline-none focus:bg-blue-100 focus:text-blue-800 dark:text-blue-500 dark:hover:bg-blue-800/30 dark:hover:text-blue-400 dark:focus:bg-blue-800/30 dark:focus:text-blue-400',
                'success' => 'text-teal-500 hover:bg-teal-100 focus:outline-none focus:bg-teal-100 hover:text-teal-800 dark:hover:bg-teal-800/30 dark:hover:text-teal-400 dark:focus:text-teal-400',
                'danger' => 'text-red-500 hover:bg-red-100 focus:outline-none focus:bg-red-100 hover:text-red-800 dark:hover:bg-red-800/30 dark:hover:text-red-400 dark:focus:bg-red-800/30 dark:focus:text-red-400',
                'warning' => 'text-yellow-500 hover:bg-yellow-100 focus:outline-none focus:bg-yellow-100 hover:text-yellow-800 dark:hover:bg-yellow-800/30 dark:hover:text-yellow-400 dark:focus:bg-yellow-800/30 dark:focus:text-yellow-400',
                'light' => 'text-white hover:bg-gray-100 focus:outline-none focus:bg-gray-100 hover:text-gray-800 dark:hover:bg-white/10 dark:hover:text-white dark:focus:bg-white/10 dark:focus:text-white',
            ],
            'soft' => [
                'dark' => 'bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:bg-white/10 dark:text-white dark:hover:bg-white/20 dark:hover:text-white dark:focus:bg-white/20 dark:focus:text-white',
                'secondary' => 'bg-gray-100 text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:bg-white/10 dark:text-neutral-400 dark:hover:bg-white/20 dark:hover:text-neutral-300 dark:focus:bg-white/20 dark:focus:text-neutral-300',
                'info' => 'bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20',
                'success' => 'bg-teal-100 text-teal-800 hover:bg-teal-200 focus:outline-none focus:bg-teal-200 dark:text-teal-500 dark:bg-teal-800/30 dark:hover:bg-teal-800/20 dark:focus:bg-teal-800/20',
                'danger' => 'bg-red-100 text-red-800 hover:bg-red-200 focus:outline-none focus:bg-red-200 dark:text-red-500 dark:bg-red-800/30 dark:hover:bg-red-800/20 dark:focus:bg-red-800/20',
                'warning' => 'bg-yellow-100 text-yellow-800 hover:bg-yellow-200 focus:outline-none focus:bg-yellow-200 dark:text-yellow-500 dark:bg-yellow-800/30 dark:hover:bg-yellow-800/20 dark:focus:bg-yellow-800/20',
                'light' => 'bg-white/10 text-white hover:bg-white/20 focus:outline-none focus:bg-white/20',
            ],
            'white' => [
                'dark' => 'border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700',
                'secondary' => 'border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700',
                'info' => 'border-gray-200 bg-white text-blue-600 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-blue-500',
                'success' => 'border-gray-200 bg-white text-teal-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700',
                'danger' => 'border-gray-200 bg-white text-red-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700',
                'warning' => 'border-gray-200 bg-white text-yellow-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700',
            ],
            'link' => [
                'dark' => 'text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-white dark:hover:text-white/70 dark:focus:text-white/70',
                'gray' => 'text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-400 dark:hover:text-white dark:focus:text-white',
                'blue' => 'text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400',
                'white' => 'text-white hover:text-white/80 focus:outline-none focus:text-white/80',
            ],
        ],
        'legend' => [
            'dark' => 'bg-gray-800 dark:bg-white',
            'gray' => 'bg-gray-600',
            'red' => 'bg-red-600',
            'yellow' => 'bg-yellow-500',
            'green' => 'bg-green-500',
            'blue' => 'bg-blue-600 dark:bg-blue-500',
            'indigo' => 'bg-indigo-500',
            'purple' => 'bg-purple-500',
            'pink' => 'bg-pink-500',
            'light' => 'bg-white',
        ],
        'progress' => [
            'progress' => [
                'dark' => 'bg-gray-800 dark:bg-white',
                'gray' => 'bg-gray-500',
                'green' => 'bg-teal-500',
                'red' => 'bg-red-500',
                'yellow' => 'bg-yellow-500',
                'blue' => 'bg-blue-600 dark:bg-blue-500',
                'light' => 'bg-white',
            ],
            'circle_gauge' => [
                'dark' => 'text-gray-800 dark:text-white',
                'gray' => 'text-gray-500',
                'green' => 'text-teal-500',
                'red' => 'text-red-500',
                'yellow' => 'text-yellow-500',
                'blue' => 'text-blue-600 dark:text-blue-500',
                'light' => 'text-white',
            ],
        ],
        'spinners' => [
            'dark' => 'text-gray-800 dark:text-white',
            'gray' => 'text-gray-600',
            'green' => 'text-teal-500',
            'red' => 'text-red-600',
            'yellow' => 'text-yellow-600',
            'blue' => 'text-blue-600 dark:text-blue-500',
            'purple' => 'text-purple-600',
            'light' => 'text-white',
        ],
        'toasts' => [
            'solid' => [
                'dark' => 'bg-gray-800 text-white',
                'success' => 'bg-teal-500 text-white',
                'danger' => 'bg-red-500 text-white',
                'warning' => 'bg-yellow-500 text-white',
                'info' => 'bg-blue-600 text-white',
                'light' => 'bg-white text-gray-600',
            ],
            'soft' => [
                'dark' => 'bg-gray-100 text-gray-800 dark:bg-white/10 dark:text-white',
                'success' => 'bg-teal-100 text-teal-800',
                'danger' => 'bg-red-100 text-red-800',
                'warning' => 'bg-yellow-100 text-yellow-800',
                'info' => 'bg-blue-100 text-blue-800',
                'light' => 'bg-white/10 text-white',
            ],
        ],
    ],

    'components' => [
        'accordion' => \RealZone22\LaraLine\View\Components\Accordion\Accordion::class,
        'collapse' => \RealZone22\LaraLine\View\Components\Accordion\Collapsable::class,

        'alert' => \RealZone22\LaraLine\View\Components\Alerts\Alert::class,

        'avatar' => \RealZone22\LaraLine\View\Components\Avatars\Avatar::class,

        'badge' => \RealZone22\LaraLine\View\Components\Badges\Badge::class,

        'button' => \RealZone22\LaraLine\View\Components\Buttons\Button::class,

        'card' => \RealZone22\LaraLine\View\Components\Cards\Card::class,

        'chat' => \RealZone22\LaraLine\View\Components\Chat\Chat::class,

        'carousel' => \RealZone22\LaraLine\View\Components\Carousel\Carousel::class,
        'carousel-item' => \RealZone22\LaraLine\View\Components\Carousel\CarouselItem::class,

        'device' => \RealZone22\LaraLine\View\Components\Devices\Device::class,

        'kbd' => \RealZone22\LaraLine\View\Components\KBD\KBD::class,

        'divider' => \RealZone22\LaraLine\View\Components\Divider\Divider::class,

        'link' => \RealZone22\LaraLine\View\Components\Links\Link::class,

        'progress' => \RealZone22\LaraLine\View\Components\Progress\Progress::class,

        'rating' => \RealZone22\LaraLine\View\Components\Rating\Rating::class,

        'spinner' => \RealZone22\LaraLine\View\Components\Spinners\Spinner::class,

        'timeline' => \RealZone22\LaraLine\View\Components\Timeline\Timeline::class,

        'input' => \RealZone22\LaraLine\View\Components\Inputs\Input::class,
    ],
];
