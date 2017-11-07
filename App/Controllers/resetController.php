<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 11/6/2017
 * Time: 3:32 PM
 */

class resetController
{
    public function index()
    {
        return view('reset');
    }

    public function reset()
    {
        $email=$_POST['email'];
        $token=User::reset($email);
        if(!$token)
        {
            dd("Failed");
        }
        dd($token);
    }
}