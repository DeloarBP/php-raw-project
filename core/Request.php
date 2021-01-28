<?php

class Request
{

    public static function uri()
    {
       return  trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function id()
    {
        return  (int) trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
