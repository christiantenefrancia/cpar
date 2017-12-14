<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header('location: index.php');
    exit();
}

require_once('connect/connect.php');
if(isset($_POST['name'])) {
    if (empty($_POST['Name'])) {
        $_SESSION['name_reminder'] = 'Name field is empty';
        header('location: signup-template.php');
        exit();
    }
} 

?>