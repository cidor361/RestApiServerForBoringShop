<?php
class Database{
    private $host = "host = localhost";
    private $port = "port = 5432";
    private $dbname = "dbname = testdb";
    private $credentials = "user = postgres password=pass123";

    public function getConnection()
    {
        $db = pg_connect("$host $port $dbname $credentials");
        if (!$db) {
            echo "Error : Unable to open database\n";
        } else {
            echo "Opened database successfully\n";
        }
    }
}