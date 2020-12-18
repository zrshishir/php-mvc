<?php
require_once('app/controller/DatabaseConnection.php');
class Buyer {
    private $dbHandle;

    public function __construct(){
        $this->dbHandle = new DatabaseConnection();
    }

    public function create($data){
        $query = "INSERT INTO buyers (amount, buyer, receipt_id, items, buyer_email, buyer_ip, note, city, phone, hash_key, entry_at, entry_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $paramType = "siss";
        $paramValue = array(
            $data['amount'],
            $data['buyer'],
            $data['receipt_id'],
            $data['items'],
            $data['buyer_email'],
            $data['buyer_ip'],
            $data['note'],
            $data['city'],
            $data['phone'],
            $data['hash_key'],
            $data['entry_at'],
            $data['entry_by'],
        );
        
        $insertId = $this->dbHandle->insert($query, $paramType, $paramValue);
        return $insertId;
    }
}