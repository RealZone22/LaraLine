<?php

namespace RealZone22\LaraLine\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RealZone22\LaraLine\LaraLine
 */
class LaraLine extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RealZone22\LaraLine\LaraLine::class;
    }
}
