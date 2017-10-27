<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 2:44 PM
 */

class App
{
    public static function boot()
    {
    }

    public static function routes()
    {
        return $_SERVER['DOCUMENT_ROOT'] . "/App/Routes/routes.php";
    }
}