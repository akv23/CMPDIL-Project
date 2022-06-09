<?php
   require("add_user.php");
$conn =mysqli_connect("localhost","root","","cmpdi");


if($_POST['name'] && $_POST['mobile'] && $_POST['designation'])
   {
	     
	 
	 $name=$_POST['name'];
	 $mobile=$_POST['mobile'];
	 $designation=$_POST['designation'];

	
     
			
  
     
			
     $sql="insert into employee(
     emp_name,
     mob_no,
     designation,
     )values('$name','$mobile','$designation')";
 
     $result=mysqli_query($conn,$sql);
     if($result)
     {
     
     $smstext="Dear ".$name." , \nyour data submitted";
     echo $smstext;
     
     
     }
     else
     {
     echo "Sorry , some error occurs.".mysqli_error($conn);
     }
    }
     
     




 

     
     
?>