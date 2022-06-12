<?php
require "conn.php";
 $action=$_POST['action'];

if($action=="registration")
	{
	    
	    
	 if($_POST['name'] && $_POST['mobile'] && $_POST['designation'])
   {
	     
	 
	 $name=$_POST['name'];
	 $mobile=$_POST['mobile'];
	 $desi=$_POST['designation'];
     $email=$_POST['email'];
     $role=$_POST['role'];
	 require("./conn.php");
     
			
     require("./conn.php");
     
			
     $sql="insert into employee(
     emp_name,
     mob_no,
     designation,
     email)values('$name','$mobile','$desi','$email')";
 
     $result=mysqli_query($conn,$sql);
     if($result)
     {
     
     $smstext="Dear ".$name." , \nThank you, user added";
     echo $smstext;
     
     
     }
     else
     {
     echo "Sorry Not added.".mysqli_error($conn);
     }
    }
     
     


}

 

     
     
?>