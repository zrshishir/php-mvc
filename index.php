<?php

if(! empty($_GET["action"])){
    $action = $_GET["action"];
}

switch($action){
    default:
            require_once('view/buyer/index.php');
    break;
}