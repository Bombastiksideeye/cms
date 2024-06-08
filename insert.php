<?php
include './db.php';
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
extract($_POST);
if(!empty($email) && !empty($username) && !empty($birthdate)){
$data = [
   'email' => $email ,
   'username' => $username ,
   'password' => $confirm_password ,
   'first_name' => $firstname ,
   'middle_name' => $middlename ,
   'last_name' => $lastname ,
   'address' => $address ,
   'gender' => $gender ,
   'status' => $status ,
   'birth_date' => $birthdate ,
   'age' => $age ,
];
$db->insert('users', $data);
$_SESSION['success'] = '<div class="toast z-50">
  <div class="alert alert-success">
    <span>Registered Successfully!</span>
  </div>
</div>';
header('location: ./');
exit;}

if(!empty($username_auth) && !empty($password_auth)){
  $auth =  $db->selectWithWhere('users','*','username="'.$username_auth.'" AND password="'.$password_auth.'"')[0];
  if($auth){
    extract($auth);
    $_SESSION['user_id'] = $user_id;
    $_SESSION['logged'] = true;
    header('location: ./user');
    
  }
  else{
    $_SESSION['error'] = '<div class="toast z-50">
    <div class="alert alert-error">
      <span>Wrong username or password!</span>
    </div>
  </div>';

  header('location: ./');
  }
}
}

?>