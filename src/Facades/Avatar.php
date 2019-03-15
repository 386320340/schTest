<?php
/**
 * Created by PhpStorm.
 * User: sunchanghao
 * Date: 2019/3/14
 * Time: 12:27 AM
 */
namespace Sch\Avatar\Facades;
use Illuminate\Support\Facades\Facade;
class Avatar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'avatar';
    }
}