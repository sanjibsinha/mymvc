<?php namespace Model;

use Database\Database as Database;

class User
{
    public $id;
    
    public function connect($id) {
        $this->id = $id;
        $db = new Database;
        $con = $db->getDB($this->id);
        return $con;        
    }
    
    
    
    
}