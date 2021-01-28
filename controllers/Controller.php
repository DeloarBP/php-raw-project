<?php
namespace controller;

use Session;

class Controller {


    public function isLogin()
    {
        if(Session::get('auth')['isLogin'] == 'true') {
            return true;
        }
        return false;
    }

    public function superAdmin()
    {
        if(Session::get('auth')['role'] == 'SuperAdmin') {
            return true;
        }
        return  false;
    }

}
