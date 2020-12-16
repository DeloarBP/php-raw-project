<?php


//namespace controller;


class UserController
{
    private $viewPath = 'pages/user/';

    public function index()
    {
        $users = App::get('database')->selectAll('user');
        return view("{$this->viewPath}index", compact('users'));
    }

    public function create()
    {
        return view("{$this->viewPath}create");
    }



}
