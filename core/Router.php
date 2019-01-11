<?php 

class Router 
{
    protected static $routes=[
        "GET"=>[],
        "POST"=>[]
    ];


    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function define($routes)
    {
        $this->routes=$routes;
    }
    
    public static function get($uri,$controller)
    {
        self::$routes["GET"][$uri] = $controller;
    }

    public static function post($uri,$controller)
    {
        self::$routes["POST"][$uri] = $controller;
    }

    public static function resource($uri,$controller)
    {
        self::$routes["GET"][$uri] = $controller. '@'. 'index';
        self::$routes["POST"][$uri] = $controller. '@'. 'store';
        self::$routes["GET"][$uri .'/show'] = $controller. '@'. 'show';

    }

    public function direct($uri,$requestType)
    {
         if (array_key_exists($uri,self::$routes[$requestType])) 
        {
           return $this->callAction(
                ...explode("@",self::$routes[$requestType][$uri])
            );
        }

        throw new Exception('No route defined');
    }

    public function callAction($controller,$action)
    {

        if (! method_exists($controller,$action)) {
            var_dump($controller);
            var_dump($action);
            throw new Exception("No Existe el metodo");
        }else 
        {
            return (new $controller)->$action();
        }
    }
}

// /post/{id}/edit* post($id)