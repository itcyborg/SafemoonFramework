<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 3:41 PM
 */
session_start();
require 'vendor/autoload.php';
App::setPublicDir($server=(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/Public/");
App::boot();
App::run();


