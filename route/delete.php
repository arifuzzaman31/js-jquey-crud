<?php

include('database.php');


$id = $_POST['id'];
// die;
$sql = " DELETE FROM `persons` WHERE `id` = $id ";
$query = mysqli_query($con, $sql);
 if (mysqli_affected_rows($con)) {
 	$result = ['status' => true, 'message' => "Delete successfully"];
 }else {
 	$result = ['status' => false, 'message' => "Unable to Delete"];
 }
echo json_encode($result);


?>