<?php


class HomeController {

    public function index()
    {
//        $tasks = App::get('database')->selectAll('todos');

        return view('dashboard');
    }
}
