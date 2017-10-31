<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 2:44 PM
 */

class App
{
    public static function root()
    {
        return __DIR__ . "/../";
    }
    public static function boot()
    {
    }

    public static function routes()
    {
        return self::root() . "/App/Routes/routes.php";
    }

    public static function action()
    {

    }

    public static function run()
    {
    }
}