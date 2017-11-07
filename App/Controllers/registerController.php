<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 11/3/2017
 * Time: 9:58 AM
 */

class registerController
{
    public function index()
    {
        return view('register');
    }

    public function register()
    {
        try {
            ##code here
            $registered=User::create(
                $_POST['username'],
                $_POST['email'],
                $_POST['password'],
                $_POST['password']
            );
            if($registered)
            {
                //redirect to home
                header('location:/home');
            }
        } catch (Exception $e) {
            $register['hasErrors']=true;
            $register['errors']=$e->getMessage();
            $register['username']=$_POST['username'];
            $register['email']=$_POST['email'];
            return view('register',$register);
        }
    }
}