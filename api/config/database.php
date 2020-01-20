<?php
class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "comics";
    private $username = "pi";
    private $password = "4732";
    public $conn;

    // get the database connection
    public function getConnection(){

        try {
            $db_connection = pg_connect("host=$this->host dbname=$this->db_name user=$this->username");
            }catch (Exception $e) {
            echo $e->getMessage();
        }

    }
}
