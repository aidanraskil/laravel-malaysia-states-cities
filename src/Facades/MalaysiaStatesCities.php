<?php

namespace Aidanraskil\MalaysiaStatesCities\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aidanraskil\MalaysiaStatesCities\MalaysiaStatesCities
 */
class MalaysiaStatesCities extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Aidanraskil\MalaysiaStatesCities\MalaysiaStatesCities::class;
    }
}
