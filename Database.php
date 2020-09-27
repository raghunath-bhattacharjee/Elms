<?php
class Database
{
    private static $instance; //The single instance
    
    function __construct()
    {
        //This line estrablished the database connection
        // live db password #1GoergeClg | u687989494_elms
        $this->connection = mysqli_connect("localhost", "root", "root", "Elms");

        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    static function getInstance()
    {
        if (!self::$instance) { // If no instance then make one
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function connection()
    {
        return $this->connection;
    }
}
