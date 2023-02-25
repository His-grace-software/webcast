<?php

require_once "./connection.php";        
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['product_id'])){
        $productId = $_POST['productId'];
        $message = $_POST['message'];
        $userid= $_POST['userid'];
    
        $data = $db->get_results("INSERT INTO `bd_chat_tab`( `userId`, `productId`, `chatContent`, `dateDone`) VALUES
        ('$userid','$productId','$message',NOW())")or die ('Unable to save chat!');
                      
        $check=0;
        echo json_encode(["check" => $check]); 
      
    }
    
}

class queryClass {    
    function _connectionClass(){
        $firstname=str_replace("'", "\'",trim(ucwords(strtolower($_POST['firstname']))));
        $lastname=str_replace("'", "\'",trim(ucwords(strtolower($_POST['lastname']))));
        $create_email=str_replace("'", "\'",trim(strtolower($_POST['create_email'])));
        $search=str_replace("'", "\'",trim(strtolower($_POST['search'])));
    
        $create_password=$_POST['create_password'];
        $confirm_password=$_POST['confirm_password'];
        $input_password=$_POST['password'];
        $phone_number=str_replace("'", "\'",trim(ucwords(strtolower($_POST['phone_number']))));
        $otp=($_POST['otp']);
    }
        
}
$callNewQueryClass = new queryClass();