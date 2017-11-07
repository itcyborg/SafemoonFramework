<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 9:06 PM
 */

/*
 * Auth Routes
 */
Auth::Routes();
Router::get('/req/{$id}','resetController@verify');
Router::get('','indexController@index');
Router::get('home','homeController@index');
Router::post('subscribe','subscriptionController@newSub');
