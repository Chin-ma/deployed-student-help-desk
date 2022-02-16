<?php

$servername = "remotemysql.com";
$user = "kEUe5t6XU9";
$pass = "g4pyshQqQd";
$dbname = "kEUe5t6XU9";

$conn = new mysqli($servername, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}
else {
    // echo 'Connected Successfully';
}

?>