<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "../config/config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        require "../security/vigenere.php";
        $msg = Encipher($message, "cipher");
        $msgs = Decipher($msg, "cipher");
        if(!empty($msg && $msgs)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg, msgs) VALUES ({$incoming_id}, {$outgoing_id}, '{$msg}', '{$msgs}')") or die();
        }
    }else{
        header("location: ../masuk.php");
    }


    
?>