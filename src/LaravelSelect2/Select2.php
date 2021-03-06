<?php

namespace HalalSoft\LaravelSelect2;

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
        return 'halalsoft.laravel-select2';
    }
}
