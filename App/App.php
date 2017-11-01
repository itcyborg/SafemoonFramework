<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 2:44 PM
 */

class App
{
    /**
     * get the root directory of the application
     * @return string
     */
    public static function root()
    {
        return __DIR__ . "/../";
    }

    /**
     *
     */
    public static function boot()
    {
    }

    /**
     * @return string
     */
    public static function routes()
    {
        return self::root() . "/App/Routes/routes.php";
    }

    /**
     *
     */
    public static function action()
    {

    }

    /**
     *
     */
    public static function run()
    {
        require Router::load(App::routes())
            ->direct(Request::uri(), Request::method());

        $action = Router::$call[Request::uri()][Request::method()];
        $contr = Router::$controller[Request::uri()];
        $controller = new $contr;
        $controller->$action();
    }
}