<?php 


require 'core/core.php';

 $router= Router::load('routes.php');
require $router->direct(Request::uri());