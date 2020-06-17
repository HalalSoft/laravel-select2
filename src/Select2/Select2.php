<?php

namespace dyaskur\Select2;

use Illuminate\Support\Facades\Facade;


class Select2 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dyaskur.select2';
    }
}
