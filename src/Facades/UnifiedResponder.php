<?php

namespace Nuewave\UnifiedResponder\Facades;

use Illuminate\Support\Facades\Facade;

class UnifiedResponder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unifiedresponder';
    }
}
