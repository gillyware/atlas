<?php

namespace Gillyware\Atlas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \Gillyware\Atlas\Contracts\AtlasServiceInterface
 *
 * @method static \Gillyware\Atlas\Services\TimezoneServiceInterface timezones()
 *
 * @see \Gillyware\Atlas\Contracts\AtlasServiceInterface
 */
class Atlas extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'atlas';
    }
}
