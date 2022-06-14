<?php
require "conn.php";
 $action=$_POST['action'];

if($action=="registration")
	{
	    
	    
	 if($_POST['emp'] && $_POST['dateofduty'] )
   {
	     
	 
	 $emp=$_POST['emp'];
	 $dateofduty=$_POST['dateofduty'];
    
	 require("./conn.php");
     
			
     require("./conn.php");
     
     
     $sql=" update employee SET duty_day= '$dateofduty'
      where emp_id = '$emp'";
 
     $result=mysqli_query($conn,$sql);
     if($result)
     {
     
     $smstext="Thank you, date assigned";
     echo $smstext;
     
     
     }
     else
     {
     echo "Sorry Not added.".mysqli_error($conn);
     }
    }
     
     


}

 

     
     
?>