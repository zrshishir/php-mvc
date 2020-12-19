<?php
require_once('config/db_config.php');
require_once('app/model/Buyer.php');
require_once('app/Validation.php');


if(! empty($_GET["action"])){
    $action = $_GET["action"];
}

switch($action){
    case "buyer-add":
        if (isset($_POST['add'])) {
            // var_dump($_SERVER);
            // var_dump($_COOKIE['buyer_creation']);
            $validation = new Validation();
            $validity = $validation->validator($_POST);
            if($validity['resp_code'] == 1){
                require_once('view/buyer/create.php');
            }else{
                $buyer = new Buyer();
                if($_COOKIE['buyer_creation'] != 110105){
                    $buyerId = $buyer->create($_POST);
                    if($buyerId){
                        setcookie('buyer_creation', 110105, time()+60);
                        require_once('view/buyer/index.php');
                        break;
                    }
                }else{
                    $validity['resp_code'] = 1;
                    $validity['message'] = 'you can not create another one within 24 hours.';
                    require_once('view/buyer/create.php');
                    break;
                }
            }
        }
        require_once("view/buyer/create.php");
    break;

    default:
            $buyer = new Buyer();
            $result = $buyer->index();
            require_once('view/buyer/index.php');
    break;
}