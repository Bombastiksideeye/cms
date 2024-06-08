<?php
session_start();
include '../db.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  extract($_POST);
  if (
    !empty($email) &&
    !empty($username) &&
    !empty($password) &&
    !empty($confirm_password) &&
    !empty($firstname) &&
    !empty($middlename) &&
    !empty($lastname) &&
    !empty($address) &&
    !empty($gender) &&
    !empty($status) &&
    !empty($birthdate) &&
    !empty($age)
  ) {


    $data = [
      'email' => $email,
      'username' => $username,
      'password' => $confirm_password,
      'first_name' => $firstname,
      'middle_name' => $middlename,
      'last_name' => $lastname,
      'address' =>$address ,
      'gender' => $gender,
      'status' => $status,
      'birth_date' => $birthdate,
      'age' => $age,

    ];
    $db->update('users',$data,'	user_id='. $_SESSION['user_id']);
    $_SESSION['reserb'] = '<div class="toast z-50">
  <div class="alert alert-info">
    <span>Updated Successfully!</span>
  </div>
</div>';
    header('location: ./');
    exit;

  }
}
