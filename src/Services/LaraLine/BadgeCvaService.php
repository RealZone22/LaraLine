<?php

namespace RealZone22\LaraLine\Services\LaraLine;

use FeatureNinja\Cva\ClassVarianceAuthority;

class BadgeCvaService
{
    public static function new(): ClassVarianceAuthority
    {
        return ClassVarianceAuthority::new(
            [
                'inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium',
            ],
            [
                'variants' => [
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
                'defaultVariants' => [
                    'solid' => 'dark',
                ],
            ],
        );
    }
}
