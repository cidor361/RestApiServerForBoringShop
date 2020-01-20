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

        $db_connection = null;
        $string = "host=$this->host dbname=$this->db_name user=$this->username password=$this->password";

        try {
            $db_connection = pg_connect("host=$this->host 
            dbname=$this->db_name user=$this->username password=$this->password");
            }catch (Exception $e) {
            echo $e->getMessage();
        }
        echo var_dump($string);
        return $db_connection;

    }
}
