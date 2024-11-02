<?php

namespace Saasykit\FilamentOops\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Saasykit\FilamentOops\FilamentOops
 */
class FilamentOops extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Saasykit\FilamentOops\FilamentOops::class;
    }
}
