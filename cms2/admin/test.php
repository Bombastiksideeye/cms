<?php
include './database.php';
$db = new DatabaseConnection();
$users = $db->view("reservations");
print_r($users);
?>