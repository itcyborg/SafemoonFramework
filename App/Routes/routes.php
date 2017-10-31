<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 9:06 PM
 */
$router->get("", "indexController@home");
$router->post('voice/say', 'indexController@say');
$router->get("user", "indexController@index");