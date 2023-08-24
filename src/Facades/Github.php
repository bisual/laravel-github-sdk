<?php

namespace Bisual\Github\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bisual\Github\Github
 */
class Github extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Bisual\Github\Github::class;
    }
}
