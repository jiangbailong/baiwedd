<?php
class Product{
    
    // database connection and table name
    private $conn;
    private $table_name = "weddpack";
    
    // object properties
    public $packcode;
    public $packname;
    public $bridal;
    public $jewel;
    public $photo;
    //public $category_name;
    //public $created;
    
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
     // read products
     function read(){
 
    // select all query
    $query = "SELECT  *     FROM "
                . $this->table_name
                ;
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}
	}
?>