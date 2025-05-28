<?php

namespace Dapodik\Model\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dapodik\Model\Model
 */
class Model extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Dapodik\Model\Model::class;
    }
}
