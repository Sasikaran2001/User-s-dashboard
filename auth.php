<?php
session_start();
if(!isset($_SESSION['username'])) {
    // echo "Hi";
    // die;
    header("Location:login.php");
    
    exit();
}
?>