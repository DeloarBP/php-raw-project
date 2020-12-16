<?php


App::bind('config', require '../config/config.php');


App::bind('database', new QueryBuilder (
    Connection::make(App::get('config')['database'])
));

