<?php
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("cmpdi", $connection); // Selecting Database from Server

$name = $_POST['firstName'];
$mobile = $_POST['Mob_no'];
$Designation = $_POST['designation'];
$query = mysql_query("insert into employee(emp_name ) values ('$name')");
if (mysqli_query($connection, $query)){


echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}


else{
    echo "Connection failed.".mysqli_error($connection);
    exit();
}
}
?>