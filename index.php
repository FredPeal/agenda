<?php 


require 'core/core.php';

 $router= Router::load('routes.php');
 $router->direct(Request::uri(),Request::method());