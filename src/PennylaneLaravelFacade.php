<?php

namespace Ashraam\PennylaneLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Asharal\PennylaneLaravel\Skeleton\SkeletonClass
 */
class PennylaneLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pennylane-laravel';
    }
}
