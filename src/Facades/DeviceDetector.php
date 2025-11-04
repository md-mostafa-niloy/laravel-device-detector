<?php

namespace Visernic\DeviceDetector\Facades;

use Illuminate\Support\Facades\Facade;

class DeviceDetector extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'device-detector';
    }
}
