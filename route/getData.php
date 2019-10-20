<?php
include('database.php');

$sql = " SELECT * FROM persons ";
$data = [];
$table = '';
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query) > 0) {

	while ($result = mysqli_fetch_assoc($query)) {
		
		$data[] = $result;
		// $result['id']
		// $table .= "<tr>";
		// $table .= "<td>".$result['first_name'].' '.$result['last_name']."</td>";
		// $table .= "<td>".$result['email']."</td>";
		// $table .= "<td>".$result['contact']."</td>";
		// $table .= "<td><button class='btn btn-sm btn-primary editButton'>Edit</button><button class='btn btn-sm btn-danger' onclick=' deletedata(".$result['id'].") '>Delete</button></td>";
		// $table .= "<tr>";
	}
}
echo json_encode($data);


?>