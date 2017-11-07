<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/30/2017
 * Time: 8:19 AM
 */
session_start();
require __DIR__ . "/../vendor/autoload.php";

App::setPublicDir($server=(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/");
App::boot();
App::run();
