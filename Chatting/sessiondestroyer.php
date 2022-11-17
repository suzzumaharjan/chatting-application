<?php
session_start();
session_unset();
session_destroy();
$serverName="172.16.1.227";
header('location:http://'.$serverName.'/chatting/Login.php');
?>