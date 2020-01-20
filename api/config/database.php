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

        $string = "host=$this->host dbname=$this->db_name user=$this->username password=$this->password";
        $db_connection = pg_connect($string);

        echo var_dump($string);
        echo var_dump($db_connection);
        return $db_connection;

    }
}
