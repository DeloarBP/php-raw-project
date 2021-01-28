<?php


//namespace controller;

use controller\Controller;

class AuthController extends Controller
{

    private $viewPath = 'pages/auth/';

    public function index()
    {
        if(!$this->isLogin()) {
            return view("{$this->viewPath}login");
        }
        redirect('dashboard');
    }

    public function login()
    {
        if ($_POST['email'] && $_POST['password']) {

            if($this->isCheckLogin($_POST['email'], $_POST['password'])) {
                redirect('dashboard');
            }

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

       if (!$user) {

           Session::set('error', [
               'login' => 'email or password don\'t match'
           ]);

           redirect('');
       }

       if (password_verify($password, $user[0]->password)) {
          return $this->setSessionData($user[0]);
       }

    }

    public function setSessionData($userData)
    {
        Session::start();
        Session::set('auth', [
            'id' => $userData->id,
            'name' => $userData->first_name,
            'role' => $userData->role,
            'isLogin' => true
        ]);
        return true;
    }

    public function logout()
    {
        if(Session::destroy()) {
            redirect('');
        }
        redirect('dashboard');
    }

    public function createTable()
    {
       $status = App::get('database')->createTable();

       echo $status;
    }

}
