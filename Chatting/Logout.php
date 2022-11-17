<?php
session_start();
include 'connection.php';
include 'function.php';
// session_unset();
// session_destroy();
$serverName="172.16.1.227";
if($_GET)
{
    $userid=$_GET['u_id'];
    $updateStatus="UPDATE tbl_users set status='0' where u_id =".$userid;
    mysqli_query($conn,$updateStatus);

    for($i=0;$i<count($_SESSION['userlist']);$i++)
    {
        
            if($_SESSION['userlist'][$i]["user_id"]==$userid)
                {
                    unset($_SESSION['userlist'][$i]);
                    $_SESSION['userlist']=array_values(array_filter($_SESSION['userlist']));
                   
                }
    }
    header('location:http://'.$serverName.'/chatting/Login.php');
    
        
    // print_r($_SESSION['userlist']);

}


?>