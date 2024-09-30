<?php
#Read Data form
$name = $_REQUEST["name"];
$lastname  = $_REQUEST["lastname"];
$phonenumber = $_REQUEST["phonenumber"];
$email = $_REQUEST["email"];

#User Data Base information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workshop";

# Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

# Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (user_name, lastname, phonenumber, email)
    VALUES ('$name', '$lastname', '$phonenumber','$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data Inserted Correctly";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

