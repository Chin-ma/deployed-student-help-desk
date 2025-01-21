<?php

//$servername = "localhost";
//$user = "root";
//$pass = "";
//$dbname = "stud";

$servername = "mysql";
$user = "phpuser";
$pass = "phppassword";
$dbname = "php_app_db";

$conn = new mysqli($servername, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}
else {
    // echo 'Connected Successfully';
}

?>
