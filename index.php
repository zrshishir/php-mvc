<?php
require_once('config/db_config.php');
require_once('app/model/Buyer.php');
require_once('app/Validation.php');


if(! empty($_GET["action"])){
    $action = $_GET["action"];
}

var_dump($_POST);
switch($action){
    case "buyer-add":
        if (isset($_POST['add'])) {
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
                        $result = $buyer->index();
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
            require_once("view/buyer/create.php");
        }else{
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                return 'shishir';
                //check if its an ajax request, exit if not
                if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
                
                    //exit script outputting json data
                    $output = json_encode(
                            array(
                                'type' => 'error',
                                'text' => 'Request must come from Ajax'
                    ));
                
                    return ($output);
                    break;
                }
            }
            require_once('view/buyer/create.php');
        }
        
    break;

    default:
            $buyer = new Buyer();
            if($_GET['search'] == 'Search'){
                $validation = new Validation();
                $validity = $validation->searchValidator($_GET);
                if($validity['resp_code'] == 0){
                    $result = $buyer->search($_GET);
                }
            }else{
                $result = $buyer->index();
            }
            require_once('view/buyer/index.php');
    break;
}