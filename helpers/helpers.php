<?php


function view($name, $data= [])
{
    extract($data);
    return require "../views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}



function dd($value)
{
    dump($value);
    die();
}

function dump($value)
{
    echo "<pre>";
    echo '<dev style="background-color:black; padding: 20px; color: #ffffff; font-size: 14px">';

    if($value)
        print_r($value);
    else
        var_dump($value);

    echo"</dev>";
    echo "</pre>";
}


//function redirect($url)
//
//{
//    header('Location:'.$_SERVER['HTTP'].'/'.$url);
//    die();
//}
//
//
//function url($path)
//{
//    return 'http://'.$_SERVER['HTTP_HOST'].'/'.$path;
//}

