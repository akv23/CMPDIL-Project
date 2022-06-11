<?php
require "conn.php";
 $action=$_POST['action'];

if($action=="registration")
	{
	    
	    
	 if($_POST['name'] && $_POST['mobile'] && $_POST['aadhar'])
   {
	     
	 
	 $name=$_POST['name'];
	 $mobile=$_POST['mobile'];
	 $password=$_POST['aadhar'];
     $email=$_POST['email'];
	 require("./conn.php");
     
			
     require("./conn.php");
     
			
     $sql="insert into login(
     emp_name,
     mob_no,
     password,
     email)values('$name','$mobile','$password','$email')";
 
     $result=mysqli_query($conn,$sql);
     if($result)
     {
     
     $smstext="Dear ".$name." , \nThank you, you are registered";
     echo $smstext;
     
     
     }
     else
     {
     echo "Sorry Not Registered, Your mobile may be allready registered.".mysqli_error($conn);
     }
    }

}

     




 

     
     
?>