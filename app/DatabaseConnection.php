<?php

class DatabaseConnection {
    private $host = "localhost";
    private $user = "root";
    private $password = "password";
    private $database = "php-mvc";
    private $connection;

    public function __construct(){
        $this->connection = $this->databaseConnection();
    }

    private function databaseConnection(){
        $connection = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $connection;
    }
}