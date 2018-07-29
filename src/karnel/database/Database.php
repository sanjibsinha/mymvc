<?php namespace Database;

class Database extends DBConfig
{
    public $id;

    public function getDB($id) {
        
        $this->id = $id;
        
        $dsn= "mysql:host=$this->host;dbname=$this->db";
        $conn = new \PDO($dsn, $this->username, $this->password);
        
        try{
            if($conn){
                $statement = "SELECT * FROM users WHERE id={$id}";
                $result = $conn->query($statement);
                 if($result === false){
                     die("Error executing the query: $statement");                     
                 }
                 while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                     $name = htmlspecialchars($row['name']);
                     return $name;
                 }
                 
             }
        } catch (\PDOException $e){
            echo $e->getMessage();
        }
        
    }
}
