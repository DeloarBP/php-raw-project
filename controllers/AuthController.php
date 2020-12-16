<?php


//namespace controller;


class AuthController
{

    private $viewPath = 'pages/auth/';

    public function index()
    {
        return view("{$this->viewPath}login");
    }


    public function login()
    {
        if ($_POST['email'] && $_POST['password']) {

            $this->isCheckLogin($_POST['email'], $_POST['password']);

        }
    }

    public function register()
    {
       $user = App::get('database')->insert('user', [
            'first_name' =>  $_POST['first_name'],
            'last_name' =>  $_POST['last_name'],
            'email' =>  $_POST['email'],
            'password' =>  password_hash($_POST['password'], PASSWORD_BCRYPT),
            'role' =>  $_POST['role'],
        ]);

       if ($user) {
           redirect('user');
       }

    }

    public function  isCheckLogin($email, $password)
    {
       $user =  App::get('database')->fetchUserByEmail($email);

       if (password_verify($password, $user[0]->password)) {
          return $this->setSessionData($user[0]);
       }
    }

    public function setSessionData($userData)
    {
        session_start();
        $_SESSION['role'] = $userData->role;
        $_SESSION['username'] = $userData->first_name . ' ' . $userData->last_name;
        $_SESSION['isLogin'] = true;
        session_write_close();

        return true;
    }

    public function createTable()
    {
       $status = App::get('database')->createTable();

       echo $status;
    }

}
