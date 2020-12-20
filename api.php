<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
    //check if its an ajax request, exit if not
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    
        //exit script outputting json data
        $output = json_encode(
                array(
                    'type' => 'error',
                    'text' => 'Request must come from Ajax'
        ));
    
        return ($output);
    }
}
// require_once('view/buyer/create.php');