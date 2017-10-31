<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 3:41 PM
 */


require 'vendor/autoload.php';

App::boot();
//dd(SMS::sendBulk(['0706928631','0703731527'],"Safemoon"));
//dd(Airtime::send(
//    [
//        [
//            'phoneNumber'=>'+254706928631',
//            'amount'=>'KES 5'
//        ],
//        [
//            'phoneNumber'=>'+254703731527',
//            'amount'=>'KES 5'
//        ]
//    ]
//));
//dd(QueryBuilder::save('users',
//    'name'
//    ));

dd(Call::make());

try {
    require Router::load(App::routes())
        ->direct(Request::uri(), Request::method());
    $action = Router::$call[Request::uri()];
    $contr = Router::$controller;
    $controller = new $contr;
    $controller->$action();
} catch (Exception $e) {
    die($e->getMessage());
}
