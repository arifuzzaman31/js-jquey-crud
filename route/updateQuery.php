<?php

include('database.php');

extract($_POST);

 $sql = " UPDATE `persons` SET `first_name`='$first_name', `last_name`='$last_name', `email`='$email', `dob`='$dob', `contact`='$contact', `city`='$city', `state`='$state', `zip`='$zip', `gender`='$gender' WHERE `id`=$hidden_id ";

$result = mysqli_query($con, $sql);
if(mysqli_affected_rows($con)){
	$result = ["status" => true,"message" => "Data Updated Successfull"];
		echo json_encode($result);
	}else{
		$result = ["status" => false,"message" => "Data Update Unsuccessfull"];
		echo json_encode($result);
	}

?>