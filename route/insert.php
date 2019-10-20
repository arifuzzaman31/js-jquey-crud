<?php

include('database.php');

extract($_POST);
// exit;
 $sql = " INSERT INTO `persons`(`first_name`, `last_name`, `email`, `dob`, `contact`, `city`, `state`, `zip`, `gender`, `status`) VALUES ('$first_name','$last_name','$email','$dob','$contact','$city','$state','$zip','$gender',$status) ";

$result = mysqli_query($con, $sql);
if(mysqli_affected_rows($con)){
	$result = ["status" => true,"message" => "Data Add Successfull"];
		echo json_encode($result);
	}else{
		$result = ["status" => false,"message" => "Data Add Unsuccessfull"];
		echo json_encode($result);
	}


?>