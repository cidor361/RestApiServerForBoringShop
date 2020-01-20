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
    function read($id = 0){
        $id = 100;
        if ($id = 0) {
            $query = "SELECT * FROM comics LIMIT 25";
        }else{
            $query = "SELECT * FROM comics WHERE id=$id";
        }
        return pg_query($this->conn, $query);
    }

    function create($object){
        $query = "INSERT INTO $this->table_name(id, name, author, category, info) VALUES ($object[id], $object[name], $object[author], $object[author], $object[info]);";
        return pg_query($this->conn, $query);
    }

    function delete($id){
        $query = "DELETE FROM $this->table_name WHERE id = $id;";
        return pg_query($this->conn, $query);
    }

    function search(){}

}