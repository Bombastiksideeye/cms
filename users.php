<?php
include 'database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all required parameters are present
    if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['firstname']) && isset($_POST['middlename']) && isset($_POST['lastname']) &&
        isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['status']) &&
        isset($_POST['birthdate']) && isset($_POST['age'])) {
        
        // Get parameters from the POST request
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $middle_name = $_POST['middlename'];
        $last_name = $_POST['lastname'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];
        $birth_date = $_POST['birthdate'];
        $age = $_POST['age'];

        // SQL query to insert data
        $sql = "INSERT INTO users (email, username, password, first_name, middle_name, last_name, address, gender, status, birth_date, age) 
                VALUES ('$email', '$username', '$password', '$firstname', '$middle_name', '$last_name', '$address', '$gender', '$status', '$birth_date', '$age')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }}}
       
        $conn->close();
?>
