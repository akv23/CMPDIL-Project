
<?php session_start(); 
$cid=$_SESSION['email'];
include "./conn.php";
									
$sql="select * from employee where emp_id ='$cid'";
$smt=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($smt);
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>CMPDI _EMPLOYEE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Lite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- //online-fonts -->
	 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <div>
        <div class="container ">
            <div class="title-wthree text-center">
                <h1 class="text-black">
                    Welcome <?php echo $rs['emp_name']; ?>
                </h1>
                <span></span>
            </div>
            <div class="row" style="margin:20px">
               <h2>Your data</h2><br>
               <hr>
               <table border="1" width="100%">
                   <tr style="background-color:#00f;color:#fff">
                       <td>Employee Name</td>
                       <td>Employee ID</td>
                       <td>Mobile No</td>
                       <td>Designation</td>
                       <td>role</td>
                       <td>password</td>
                       <td>Duty day</td>
                       <td>Admin</td>
                       <td></td>
                       <td></td>
                   </tr>
                   	<?php 
                                    include "./conn.php";
									
									
                                    $sl=1;
                                    $sql="select * from employee where emp_id='$cid'";
                                    $smt=mysqli_query($conn,$sql);
                                    while($rs=mysqli_fetch_assoc($smt))
                                    {
                                      echo "<tr>";  
                                        
                                         echo "<td>".$rs['emp_name']."</td>";
                                          echo "<td>".$rs['emp_id']."</td>";
                                         echo "<td>".$rs['mob_no']."</td>";
                                         echo "<td>".$rs['designation']."</td>";
                                         echo "<td>".$rs['role']."</td>";
                                         echo "<td>".$rs['password']."</td>";
                                         echo "<td>".$rs['admin']."</td>";
                                        
                                      echo "</tr>";  
                                     
                                    }
                ?>
               </table>   
             
                               
        </div> 
                
              
				
            </div>
			      <center>
                   <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
               </center>      
        </div>
    </div>

    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>