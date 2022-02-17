<?php

include_once 'Config.php';

$name = $_POST['name'];
$subject = $_POST['subject'];
$querytext = trim($_POST['querytext']);

$sql = "INSERT INTO queries (`name`, `subject`, `querytext`, `querytime`) VALUES ('$name', '$subject', '$querytext', CURRENT_TIMESTAMP())";

if ($conn->query($sql) === TRUE) {
    header('Location: ViewQuery.php');
} 
else {
    echo 'Error'. $sql . 'br' . $conn->error;
}

?>