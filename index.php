<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 3:41 PM
 */

/*
 * Import the required files through composer's autoloader
 */
require 'vendor/autoload.php';


$data = [
    'username' => 'isaac',
    'password' => 'secret',
    'date' => 'today'
];
QueryBuilder::save('users', $data);
/*
 * Initialize the application
 */
App::boot();

/*
 * Route requests to handler
 */
try {
    /*
     * Run the application
     */
    App::run();

} catch (Exception $e) {
    die($e->getMessage());
}
