<?php 

include 'Config.php';
if (count($_POST)>0) {
	$sql = mysqli_query($conn, "DELETE FROM queries WHERE id='" . $_POST['id'] . "'");
}
header('Location: AdminQueryList.php');
?>