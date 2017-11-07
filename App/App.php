<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 2:44 PM
 */

class App
{
    public  static $publicDir;
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
        try {
            require Router::load(App::routes())
                ->direct(Request::uri(), Request::method());
            $action = Router::$call[Request::uri()][Request::method()];
            $contr = Router::$controller[Request::uri()];
            $controller = new $contr;
            $controller->$action();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function setPublicDir($dir)
    {
        self::$publicDir=$dir;
    }

    /**
     * @return mixed
     */
    public static function publicDir()
    {
        return self::$publicDir;
    }
}