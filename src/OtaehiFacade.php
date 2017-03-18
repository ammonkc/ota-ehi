<?php

namespace Ammonkc\Otaehi;

use Illuminate\Support\Facades\Facade;

class OtaehiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Otaehi';
    }
}
