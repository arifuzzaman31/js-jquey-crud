<?php

include('database.php');
	
$id = $_POST['id'];
// $data = [];
$sql = " SELECT * FROM `persons` WHERE `id` = $id ";

$query = mysqli_query($con, $sql);

	while($result = mysqli_fetch_assoc($query)){
		
		echo json_encode($result) ;
	}
		


?>