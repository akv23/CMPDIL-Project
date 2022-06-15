<?php
require "conn.php";
 $action=$_POST['action'];

if($action=="registration")
	{
	    
	    
	 if($_POST['name'] && $_POST['mobile'] && $_POST['password'] && $_POST['designation'] && $_POST['eid'] && $_POST['admin'])
   {
	     
	 
	 $name=$_POST['name'];
	 $mobile=$_POST['mobile'];
     $password=$_POST['password']; 
	 $desi=$_POST['designation'];
     $email=$_POST['email'];
     $eid=$_POST['eid'];
     $admin=$_POST['admin'];
	 require("./conn.php");
     
			
     require("./conn.php");
     
			
     $sql="insert into employee(
     emp_name,
     mob_no,
     password,
     designation,
     email,
     emp_id,
     admin)values('$name','$mobile','$password','$desi','$email','$eid','$admin')";
 
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
     
    else{
        $smstext="Enter Data first";
     echo $smstext;
     
    }  


}

 

     
     
?>