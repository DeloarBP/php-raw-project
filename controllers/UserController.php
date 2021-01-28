<?php


//namespace controller;


class UserController extends \controller\Controller
{
    private $viewPath = 'pages/user/';

    public function index()
    {
        if($this->isLogin() && $this->superAdmin()) {

            $users = App::get('database')->selectAll('user');

            return view("{$this->viewPath}index", compact('users'));

        }

        redirect('dashboard');
    }

    public function create()
    {
        if($this->isLogin() && $this->superAdmin()) {

            return view("{$this->viewPath}create");

        }

        redirect('dashboard');
    }



}
