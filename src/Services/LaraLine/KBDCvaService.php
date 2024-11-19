<?php

namespace RealZone22\LaraLine\Services\LaraLine;

use FeatureNinja\Cva\ClassVarianceAuthority;

class KBDCvaService
{
    public static function new(): ClassVarianceAuthority
    {
        return ClassVarianceAuthority::new(
            [],
            [
                'variants' => [
                    'type' => [
                        'gray' => 'inline-flex items-center font-mono text-sm text-gray-400 dark:text-neutral-600',
                        'light' => 'inline-flex items-center font-mono text-sm text-gray-800 dark:text-neutral-200',
                        'graybg' => 'min-h-[30px] inline-flex justify-center items-center py-1 px-1.5 bg-gray-200 border border-transparent font-mono text-sm text-gray-800 rounded-md dark:bg-neutral-700 dark:text-neutral-200',
                        'lightbg' => 'min-h-[30px] inline-flex justify-center items-center py-1 px-1.5 bg-white border border-gray-200 font-mono text-sm text-gray-800 rounded-md dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200',
                        'shadow' => 'min-h-[30px] inline-flex justify-center items-center py-1 px-1.5 bg-white border border-gray-200 font-mono text-sm text-gray-800 shadow-[0px_2px_0px_0px_rgba(0,0,0,0.08)] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:shadow-[0px_2px_0px_0px_rgba(255,255,255,0.1)] rounded-md',
                    ]
                ],
                'defaultVariants' => [
                    'type' => 'graybg',
                ],
            ],
        );
    }
}
