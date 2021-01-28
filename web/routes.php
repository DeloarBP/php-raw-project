
<?php


$router->get('', 'AuthController@index');
$router->get('dashboard', 'HomeController@index');
$router->get('user', 'UserController@index');
$router->get('user/create', 'UserController@create');
$router->get('issue/create', 'HomeController@create');
$router->get('delete', 'HomeController@delete');

$router->get('generate-table', 'AuthController@createTable');
$router->get('404', 'HomeController@notFound');


$router->post('login', 'AuthController@login');
$router->post('register', 'AuthController@register');
$router->post('logout', 'AuthController@logout');
$router->post('names', 'HomeController@index');
$router->post('store', 'HomeController@store');

