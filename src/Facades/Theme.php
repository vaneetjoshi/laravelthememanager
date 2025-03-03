<?php

namespace Vaneetjoshi\Laravelthememanager\Facades;

use Illuminate\Support\Facades\Facade;

class Theme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Vaneetjoshi\Laravelthememanager\Contracts\ThemeContract::class;
    }
}
