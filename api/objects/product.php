<?php
class Product{

    // database connection and table name
    private $conn;
    private $table_name = "comics";

    // object properties
    public $id;
    public $name;
    public $author;
    public $description;
    public $price;
    public $category_id;
    public $category_name;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
    function read(){

        // select all query
        $query = "SELECT * FROM comics LIMIT 10";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}