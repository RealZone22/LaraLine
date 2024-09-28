<?php

// config for RealZone22/LaraLine
return [
    'prefix' => '',

    'components' => [
        'accordion' => \RealZone22\LaraLine\View\Components\Accordion\Accordion::class,
        'accordion-item' => \RealZone22\LaraLine\View\Components\Accordion\AccordionItem::class,
        'alert' => \RealZone22\LaraLine\View\Components\Alert::class,
    ],

    'alerts' => [
        'colors' => [
            'solid' => [
                'dark' => 'bg-gray-800 text-white dark:bg-white dark:text-neutral-800',
                'secondary' => 'bg-gray-500 text-white',
                'info' => 'bg-blue-600 text-white',
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
    ],
];
