<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 3:41 PM
 */


require 'vendor/autoload.php';

App::boot();

try {
    require Router::load(App::routes())
        ->direct(Request::uri(), Request::method());
} catch (Exception $e) {
    die($e->getMessage());
}
