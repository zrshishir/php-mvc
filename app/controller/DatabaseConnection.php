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

    public function bindQueryParams($sql, $param_type, $param_value_array) {
        $param_value_reference[] = & $param_type;
        for($i=0; $i<count($param_value_array); $i++) {
            $param_value_reference[] = & $param_value_array[$i];
        }
        call_user_func_array(array(
            $sql,
            'bind_param'
        ), $param_value_reference);
    }

    public function insert($query, $param_type, $param_value_array) {
        $sql = $this->conn->prepare($query);
        $this->bindQueryParams($sql, $param_type, $param_value_array);
        $sql->execute();
        $insertId = $sql->insert_id;
        return $insertId;
    }
}