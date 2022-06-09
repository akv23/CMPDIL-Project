<?php

require "./conn.php";
if($_POST['id'] && $_POST['pwd'])
{
	$cid=$_POST['id'];
	$password=$_POST['pwd'];
	
//Sql Query for Sing In...
$sql="select * from employee where mob_no='$cid'";

$smt= mysqli_query($conn,$sql);

	if($rs=mysqli_fetch_assoc($smt))
	{
		if($password==$rs['password'])
		{
			//Creating Session...
			session_start();
			$_SESSION['cid'] = $rs['mobile'];
			$_SESSION['name']=$rs['name'];
			$_SESSION['email']=$rs['email'];
			$_SESSION['password']=$rs['password'];
			
			session_write_close();
			echo "1";
			}
			else
			{
			 echo'<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Oops !</strong> Wrong Password.
     </div>'; 
			}
	}

	else
	{
		echo'<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Oops !</strong> Wrong Mobile Number.
     </div>'.mysqli_error($conn);
	}
}
else
{
	echo'<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Incomplete Form!</strong> Please Enter a Registered Mobile & Password.
     </div>';
}


?>