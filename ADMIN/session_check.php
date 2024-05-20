<?php
session_start();
if(!isset($_SESSION['loggedin']) )
{
    header("location: ../ADMIN/login.php");
    exit;
}


?>