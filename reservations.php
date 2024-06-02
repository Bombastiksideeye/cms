<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "compassionmemorialgardens";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO tablename (column1, column2, column3) VALUES ('value1', 'value2', 'value3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
