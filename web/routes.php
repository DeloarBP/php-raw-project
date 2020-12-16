
<?php


$router->get('', 'AuthController@index');
$router->get('dashboard', 'HomeController@index');

$router->get('user', 'UserController@index');
$router->get('user/create', 'UserController@create');

$router->get('generate-table', 'AuthController@createTable');

$router->post('login', 'AuthController@login');
$router->post('register', 'AuthController@register');

$router->post('names', 'HomeController@index');
