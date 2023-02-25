 <?php

require_once "../config/connection.php";        
   
// if ($_SERVER["REQUEST_METHOD"] == "POST"):

//     if (isset($_POST['chatText'])):

        $postId = $_POST['postId'];
        $message = $_POST['chatText'];

        $db = new Database();
        $data = $db->get_results("INSERT INTO `chattab`(`postId`, `userId`, `chatText`, `chatImage`, `chatVideo`, `chatDate`) VALUES ('$postId','1','$message','$chatImage','$chatVideo',NOW())")or die ('Unable to save chat!');      

//     endif;   
    
// endif;
    ?>