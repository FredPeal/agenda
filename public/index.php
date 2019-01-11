<?php 


include_once(__DIR__ . '/../core/bootstrap.php');

if(isset($_SERVER["REQUEST_URI"]) && isset($_SERVER["REQUEST_METHOD"]))
{
    $router= Router::load(__DIR__ . '/../routes.php');
    $router->direct(Request::uri(),Request::method());
}

 