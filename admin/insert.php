<?php
include('../database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $dob = $_POST['dob'];
    $dod = $_POST['dod'];
    $pob = $_POST['pob'];
    $pod = $_POST['pod'];
    $cod = $_POST['cod'];
    $burialDate = $_POST['burialDate'];
    $burialPlace = $_POST['burialPlace'];


    // Insert the new record
    $db->insert('reservations', 
        ['last_name', 'first_name', 'middle_name', 'birth_date', 'death_date', 'birth_place', 'death_place', 'cause_of_death', 'burial_date', 'burial_place'], 
        [$lastName, $firstName, $middleName, $dob, $dod, $pob, $pod, $cod, $burialDate, $burialPlace]
    );

    // Close the database connection
    $db->close_connection();

    // Redirect to a success page or display a success message
    header('Location: ./deceased_profile.php');
    //echo "success";
    exit();
} else {
    // Handle invalid request method
    echo "Invalid request method.";
}
?>


?>