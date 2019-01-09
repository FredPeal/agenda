<?php 

class Connection 
{ 
    public static function make($config)
    {
        try
        {
            return new PDO($config['host'].';dbname='.$config['database'],$config["user"],$config["password"]);
        }catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}

