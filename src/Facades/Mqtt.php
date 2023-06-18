<?php

namespace Nerdmonkey\Mqtt\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nerdmonkey\Mqtt\Mqtt
 */
class Mqtt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nerdmonkey\Mqtt\Mqtt::class;
    }
}
