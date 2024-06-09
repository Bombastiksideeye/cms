<?php 
include '../db.php';
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    extract($_POST);
    $auth =  $db->selectWithWhere('admins','*', "username='$username' AND password='$password'")[0];
    if($auth) 
    {
        $_SESSION['auth'] = true;
        header('location: ./AI');
        //echo $auth;
        exit;
    }
    else {
        $_SESSION['error'] = 'wrong username or password';
        header('location: ./log_in.php');
        exit;
    }
}