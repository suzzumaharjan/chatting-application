<?php
    include "connection.php";
    $serverName="172.16.1.227";
   
    if($_GET){
        $u_id = $_GET['u_id'];
        $sql = "DELETE  FROM tbl_users  WHERE u_id = $u_id";
        // echo $sql;
        if(mysqli_query($conn, $sql)){
            header('Location:http://'.$serverName.'/chatting/userfetch.php');
            exit();
        }
        else
        {
            echo "Error deleting record: " . $conn->error;
        }
        
    }
    mysqli_close($conn);
?>