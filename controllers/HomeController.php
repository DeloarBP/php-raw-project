<?php


use controller\Controller;

class HomeController extends Controller {

    public function index()
    {
        if($this->isLogin()) {
            if ($this->superAdmin()) {

                $issues = App::get('database')->selectAll('issue');

            } else {

                $issues = App::get('database')->selectALLThisUsers('issue', Session::get('auth')['id']);

            }

            return view('dashboard', compact('issues'));
        }

        redirect('');
    }

    public function create()
    {
        return view('pages/issue/create');
    }

    public function store()
    {
        $issue = App::get('database')->insert('issue', [
            'user_name' =>  $_POST['user_name'],
            'dept_name' =>  $_POST['dept_name'],
            'action_taken' =>  $_POST['action_taken'],
            'issue_description' =>  $_POST['issue_description'],
            'status' =>  $_POST['status'],
            'creator_id' => Session::get('auth')['id'],
            'action_date' =>  $_POST['action_date'],
            'issue_date' =>  $_POST['issue_date'],
        ]);

        if ($issue) {
            redirect('dashboard');
        }

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        if (Request::id()) {
            App::get('database')->deleteRow('issue', Request::id());
        }
    }

    public function notFound()
    {
       return view('404');
    }
}
