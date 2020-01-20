<?php
class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "boringdb";
    private $username = "boringuser";
    private $password = "123";
    public $conn;

    // get the database connection
    public function getConnection(){

        $string = "host=$this->host dbname=$this->db_name user=$this->username password=$this->password";
        $db_connection = pg_connect($string);

        return $db_connection;

    }
}
