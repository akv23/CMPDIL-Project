<?php session_start();
require "../conn.php";
if($_POST['email'] && $_POST['password'])
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
//Sql Query for Sing In...
$sql="select * from tbl_portal_admin where userid='$email'";

$smt= mysqli_query($conn,$sql);

	if($rs=mysqli_fetch_assoc($smt))
	{
		if(md5($password)==$rs['password'])
		{
			//Creating Session...
			
			$_SESSION['email'] = $rs['userid'];
			$_SESSION['password']=$rs['password'];

			session_write_close();
			echo "1";
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