<?php session_start(); 
$cid=$_SESSION['email'];
include "./conn.php";
									
$sql="select * from employee";
$smt=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($smt);


require "conn.php";
 $action=$_POST['action'];

if($action=="registration")
	{
	    
	    
	 if($_POST['oldPass'] && $_POST['newPass'] )
   {
	     
    $old=$_POST['oldPass'];
    $new=$_POST['newPass'];
    $verify=$_POST['verPass'];

	
	 require("./conn.php");
     
			
     require("./conn.php");
     $sql="select * from employee";
     $smt=mysqli_query($conn,$sql);
     $rs=mysqli_fetch_assoc($smt);

     
		if($rs['password']==$old && $new== $verify)
		{
			$sql=" update employee SET password= '$new'
             where emp_id = '$cid'";
 
     $result=mysqli_query($conn,$sql);
    
     if($result)
     {
     
     $smstext="Thank you, password changed";
     echo $smstext;
     
     
     }
     else
     {
     echo "Sorry Not changed.".mysqli_error($conn);
     }
    }
    else{
        $smstext="write correct password!"; 
        echo $smstext;
    }
    
    
     
     


}
else{
    $smstext="enter password first!"; 
    echo $smstext;
}

 
    }
     
     
?>