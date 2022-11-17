<?php
include 'connection.php';
include 'function.php';
if($_POST)
{
    $fromuser=$_POST['fromuser_id'];
    $message=$_POST['messages'];
    $touser=$_POST['touser_id'];
    $resulting=appendUserId($fromuser,$touser);
        $ciphering = "AES-128-CTR"; 
        $options = 0; 
        $encryption_iv = '1234567891011121';
        $encryption_key = $resulting;
        $encryptedmsg = openssl_encrypt($message, $ciphering, $encryption_key, $options, $encryption_iv);
       
    if(!empty($message))
    {
        $sql=mysqli_query($conn,"INSERT into tbl_message(fromuser_id,messages,touser_id) values('$fromuser',' $encryptedmsg','$touser')");
    }
    else{
        echo"message is empty";
    }
  
}
?>
