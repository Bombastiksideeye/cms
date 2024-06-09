<?php
include '../db.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  extract($_POST);
  if (
    !empty($lastname) &&
    !empty($firstname) &&
    !empty($middlename) &&
    !empty($birthdate) &&
    !empty($deathdate) &&
    !empty($birthplace) &&
    !empty($deathplace) &&
    !empty($cause_of_death) &&
    !empty($burial_date) &&
    !empty($lot_type_1) &&
    !empty($area_size_1) &&
    !empty($amount_1)
  ) {

    $data = [
      'last_name'    =>    $lastname,
      'first_name'    =>    $firstname,
      'middle_name'    =>    $middlename,
      'birth_date'    =>    $birthdate,
      'death_date'    =>    $deathdate,
      'birth_place'    =>    $birthplace,
      'death_place'    =>    $deathplace,
      'cause_of_death'    =>    $cause_of_death,
      'burial_date'    =>    $burial_date,
      'lot_type'    =>    $lot_type_1,
      'area_size'    =>    $area_size_1,
      'amount'    =>    $amount_1,
      'user_id' => $_SESSION['user_id']

    ];
    $db->insert('reservations',$data);
   echo $_SESSION['reserb'] = '<div class="toast z-50">
  <div class="alert alert-info">
    <span>Reservation Successfully Paid!</span>
  </div>
</div>';
    header('location: ./');
    exit;

  }

  elseif (
    !empty($lastname) &&
    !empty($firstname) &&
    !empty($middlename) &&
    !empty($birthdate) &&
    !empty($deathdate) &&
    !empty($birthplace) &&
    !empty($deathplace) &&
    !empty($cause_of_death) &&
    !empty($burial_date) &&
    !empty($lot_type_1) &&
    !empty($area_size_1) &&
    !empty($down_payment_1) &&
    !empty($monthly_amortization_1)
  ) {

    $data = [
      'last_name'    =>    $lastname,
      'first_name'    =>    $firstname,
      'middle_name'    =>    $middlename,
      'birth_date'    =>    $birthdate,
      'death_date'    =>    $deathdate,
      'birth_place'    =>    $birthplace,
      'death_place'    =>    $deathplace,
      'cause_of_death'    =>    $cause_of_death,
      'burial_date'    =>    $burial_date,
      'lot_type'    =>    $lot_type_1,
      'area_size'    =>    $area_size_1,
      'down_payment'    =>    $down_payment_1,
      'monthly_amortization'    =>    $monthly_amortization_1,
      'user_id' => $_SESSION['user_id']

    ];
    $db->insert('reservations',$data);
   echo $_SESSION['reserb'] = '<div class="toast z-50">
  <div class="alert alert-info">
    <span>Reservation Successfully Paid!</span>
  </div>
</div>';
    header('location: ./');
    exit;

  }











 
  if (
    !empty($coname) &&
    !empty($conemail) &&
    !empty($conphone) &&
    !empty($conmessage)

  ) {

    $data = [
      'name'    =>    $coname,
      'email'    =>    $conemail,
      'phone'    =>    $conphone,
      'message'    =>    $conmessage,
      'user_id' => $_SESSION['user_id']

    ];
    $db->insert('contactmessages',$data);
    $_SESSION['reserb'] = '<div class="toast z-50">
  <div class="alert alert-info">
    <span>Concern Send Successfully!</span>
  </div>
</div>';
    header('location: ./');
    exit;

  }

}
