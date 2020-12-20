<?php

class DatabaseConnection {
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'password';
    private $database = 'php-mvc';
    private $connection;

    public function __construct(){
        $this->connection = $this->databaseConnection();
    }

    public function allDataQuery($query) {
        $result = $this->connection->query($query);  
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }
        return $resultset;
    }

    public function searchQuery($query, $param_type, $param_value_array){
        $sql = $this->connection->prepare($query);
        $this->bindQueryParams($sql, $param_type, $param_value_array);
        $sql->execute();
        $result = $sql->get_result();
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }
        
        if(!empty($resultset)) {
            return $resultset;
        }
    }

    public function databaseConnection(){
        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
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
        $sql = $this->connection->prepare($query);
        $this->bindQueryParams($sql, $param_type, $param_value_array);
        $sql->execute();
        $insertId = $sql->insert_id;
        return $insertId;
    }
}