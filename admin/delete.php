<?php 
include '../db.php';
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    extract($_GET);
    if(!empty($id) && !empty($burial_date)){
        $db->delete('reservations', 'user_id=' . $id . ' AND burial_date="' . $burial_date . '"');
        header('location: ./deceased_profile');
        exit;
    }
    elseif (!empty($id) && !empty($username)){
        $db->delete('users', 'user_id=' . $id . ' AND username="' . $username . '"');
        header('location: ./user_profile');
        exit;
    }
}
?>