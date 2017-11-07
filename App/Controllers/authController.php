<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 11/1/2017
 * Time: 10:45 AM
 */

class authController
{

    public function login()
    {
    	dd(DB::All('users'));
    }

    public function register()
    {
        try {
            ##code here
           User::create(
                $_POST['username'],
                $_POST['email'],
                $_POST['password'],
                $_POST['password']
            );
        } catch (Exception $e) {
            dd(Notifications::hasErrors());
            //die($e->getMessage());
        }
    }
    
    public function loginIndex()
    {
        return view('login');
    }

    public function registerIndex()
    {
        return view('register');
    }
}