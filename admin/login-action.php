<?php session_start();
require "../conn.php";
if($_POST['email'] && $_POST['password'])
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
//Sql Query for Sing In...
$sql="select * from employee where emp_id='$email'";

$smt= mysqli_query($conn,$sql);

	if($rs=mysqli_fetch_assoc($smt))
	{
		if($password=="12345" && $rs['admin']=="yes")
		{
			//Creating Session...
			
			$_SESSION['email'] = $rs['emp_id'];
			$_SESSION['password']=$rs['password'];

			session_write_close();
			echo "1";
			}

			else if($password==$rs['password'])
			{
				//Creating Session...
				
				$_SESSION['email'] = $rs['emp_id'];
				$_SESSION['password']=$rs['password'];
	
				session_write_close();
				echo "0";
				}
				
			else
			{
			 echo'Invalid Password.'; 
			}
			
	}

	else
	{
		echo'Invalid Username';
	}
}
else
{
	echo'Complete Form.';
}


?>