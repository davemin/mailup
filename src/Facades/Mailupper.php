<?php
namespace Davemin\Mailup\Facades;

use Illuminate\Support\Facades\Facade;

class Mailupper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mailup';
    }

}
