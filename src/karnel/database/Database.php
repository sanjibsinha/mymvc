<?php namespace Database;

class Database
{
    public $db;
    public $id;
    public function getDB($id) {
        $this->id = $id;
        $this->db = new \PDO('mysql:host=localhost;dbname=mymvc', 'root', 'Sanjib@100');
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $stmt = $this->db->prepare("SELECT name FROM users WHERE id={$id}");
        $stmt->execute();
// set the resulting array to associative
    $result = $stmt->setFetchMode(\PDO::FETCH_ASSOC);
    return $result;
        
    }
}