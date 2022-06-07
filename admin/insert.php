<?php
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$connection = mysqli_connect("localhost", "root", "","cmpdi"); // Establishing Connection with Server
$db = mysqli_select_db( $connection,"cmpdi"); // Selecting Database from Server

$name = $_POST['firstName'];
$mobile = $_POST['Mob_no'];
$Designation = $_POST['designation'];
$sql= "insert into employee values ('$name', '$mobile', '$Designation')";
if (mysqli_query($connection, $query)){


echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}


else{
    echo "Connection failed.".mysqli_error($connection);
    exit();
}
}
?>