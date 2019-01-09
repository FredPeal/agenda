<?php 

class QueryBuilder 
{
    protected $config;
    public function __construct($config)
    {
        $this->config=$config;
    }
    public function selectAll($table)
    {
        $pdo = Connection::make($this->config["database"]);
        $query = "SELECT * FROM {$table}";
        $statement = $pdo->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}