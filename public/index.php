<?php
ini_set('display_errors', 1);

require  '../vendor/autoload.php';

require '../core/bootstrap.php';

require '../helpers/helpers.php';


Router::load('../web/routes.php')
    ->direct(Request::uri(), Request::method());

