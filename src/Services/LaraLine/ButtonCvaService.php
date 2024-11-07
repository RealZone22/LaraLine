<?php

namespace RealZone22\LaraLine\Services\LaraLine;

use FeatureNinja\Cva\ClassVarianceAuthority;

class ButtonCvaService
{
    public static function new(): ClassVarianceAuthority
    {
        return ClassVarianceAuthority::new(
            [
                'py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg disabled:opacity-50 disabled:pointer-events-none',
            ],
            [
                'variants' => [
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
                'defaultVariants' => [
                    'solid' => 'dark',
                ],
            ],
        );
    }
}
