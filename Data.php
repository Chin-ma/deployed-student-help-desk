<?php

include 'Config.php';

$studname = $_POST['studname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO stud_details (studname, username, email, password) VALUES ('$studname', '$username', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo 'Details added';
} 
else {
    echo 'Error'. $sql . 'br' . $conn->error;
}

header('Location:Login.php');
?>