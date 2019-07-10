<?php
class Database{
 
    // specify your own database credentials
    private $host = "b4tkzmcll4hubyoevkdm-postgresql.services.clever-cloud.com";
    private $db_name = "b4tkzmcll4hubyoevkdm";
    private $username = "usspz3byg0tnfbujqc3x";
    private $password = "bImwf2EwfjZrFSk9ErrG";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("pgsql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>