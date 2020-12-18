<?php
require_once('config/db_config.php');


if(! empty($_GET["action"])){
    $action = $_GET["action"];
}

switch($action){
    case "buyer-add":
        if (isset($_POST['add'])) {
            var_dump($_POST);
        }
        require_once("view/buyer/create.php");
    break;

    default:
            require_once('view/buyer/index.php');
    break;
}