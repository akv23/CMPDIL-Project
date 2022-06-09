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
     
			
     $sql="insert into employee(
     emp_name,
     mob_no,
     password,
     email)values('$name','$email','$mobile','$password')";
 
     $result=mysqli_query($conn,$sql);
     if($result)
     {
     
     $smstext="Dear ".$name." , \nThank you for choosing us.\nRegards\nwww.chhatralay.in";
     echo $smstext;
     
     
     }
     else
     {
     echo "Sorry Not Registered, Your mobile may be allready registered.".mysqli_error($conn);
     }
    }
     
     


}

 

     
     
?>