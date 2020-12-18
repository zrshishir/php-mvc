<?php
require_once('config/db_config.php');
require_once('app/Validation.php');


if(! empty($_GET["action"])){
    $action = $_GET["action"];
}

switch($action){
    case "buyer-add":
        if (isset($_POST['add'])) {
            $validation = new Validation();
            $validity = $validation->validator($_POST);
            var_dump($validity['message']);
        }
        require_once("view/buyer/create.php");
    break;

    default:
            require_once('view/buyer/index.php');
    break;
}