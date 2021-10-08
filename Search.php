<?php

include 'Config.php';

$search = $_POST['search'];
$sql = "SELECT querytext FROM queries WHERE subject LIKE '%".$search."%' OR name LIKE '".$search."'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['querytext'];
	}
} else {
	echo "No result found!!";
}


header('Location: ViewQuery.php');
?>