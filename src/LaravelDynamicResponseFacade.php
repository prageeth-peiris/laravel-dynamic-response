<?php

namespace PrageethPeiris\LaravelDynamicResponse;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PrageethPeiris\LaravelDynamicResponse\Skeleton\SkeletonClass
 */
class LaravelDynamicResponseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-dynamic-response';
    }
}
