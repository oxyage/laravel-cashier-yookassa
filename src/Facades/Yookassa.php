<?php

namespace Oxyage\Laravel\Yookassa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Oxyage\Laravel\Yookassa\Yookassa
 */
class Yookassa extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-cashier-yookassa';
    }
}
