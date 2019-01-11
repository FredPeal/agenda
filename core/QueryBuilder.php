<?php 

class QueryBuilder 
{
    protected $config;
    protected $table;
    protected $pdo;
    protected $primary = "id";
 
    public function __construct()
    {
        
        $this->config = require 'config.php';
        $this->pdo = Connection::make($this->config["database"]);

    }

    public function selectAll(){
        ///try {

        // }
        $query="SELECT * FROM {$this->table}";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function find($id)
    {
        try {
            $query = "SELECT * FROM {$this->table} WHERE {$this->primary}={$id}";
            $statement = $this->pdo->prepare($this->query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }catch(Exception $e){
            $e->getMessage();
        }

    }

    public function create($array)
    {
        $query = sprintf("INSERT INTO %s(%s) VALUES(%s)", implode(',',$array), ':' . implode(',',$array)); 
        var_dump($query);
    }

    //public function join($table)
}