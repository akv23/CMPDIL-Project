<?php

$conn =mysqli_connect("localhost","root","","cmpdi");
	if($conn!=true)
	{
		echo "Connection failed.".mysqli_error($conn);
		exit();
	}




?>
