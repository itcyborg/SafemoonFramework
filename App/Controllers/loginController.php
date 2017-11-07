<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 11/3/2017
 * Time: 9:58 AM
 */

class loginController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        try{
            if(User::login($_POST['email'],$_POST['password']))
            {
                header('location:home');
            }
        }catch (Exception $e)
        {
            $data['hasErrors']=true;
            $data['errors']=$e->getMessage();
            return view('login',$data);
        }
    }

    public function logout()
    {
        User::logout();
    }

    public function loginRequired()
    {
        $required['hasErrors']=true;
        $required['errors']="You have to login to continue.";
        return view('login',$required);
    }
}