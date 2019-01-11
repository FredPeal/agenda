<?php 

class Request 
{
    public $params = [];
    public function __construct()
    {
        
    }

    public static function uri()
    {
        //parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH)
        return trim($_SERVER["REQUEST_URI"],"/");
    }
    public static function method()
    {
        return $_SERVER["REQUEST_METHOD"];
    }
}