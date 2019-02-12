<?php

namespace Serkarn\ClickhouseMigrations;

class ClickhouseFacade extends \Illuminate\Support\Facades\Facade
{
    
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'serkarn-clickhouse';
    }
    
}
