<?php 
    include_once "../security/vigenere.php";
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "../config/config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = $_POST["message"];
        $msg = encrypt($key, $message);
        if(!empty($msg)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg) VALUES ({$incoming_id}, {$outgoing_id}, '{$msg}')") or die();
        }
    }else{
        header("location: ../masuk");
    }


    
?>