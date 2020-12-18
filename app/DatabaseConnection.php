<?php
require_once('config/db_config.php');
class DatabaseConnection {
    private $host;
    private $user;
    private $password;
    private $database;
    private $connection;

    public function __construct(){
        $this->connection = $this->databaseConnection();
    }

    private function databaseConnection(){
        $config_credentials = include('config/db_config.php');
        $connection = mysqli_connect(
                $this->host = $config_credentials['host'],
                $this->user = $config_credentials['user'],
                $this->password = $config_credentials['password'],
                $this->database = $config_credentials['database']
            );
        return $connection;
    }
}