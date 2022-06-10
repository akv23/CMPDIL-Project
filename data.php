<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cmpdi";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname );
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="select * from employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["emp_id"]. " - Name: " . $row["emp_name"].
    " - mobile no: " . $row["mob_no"].
    " - designation: " . $row["designation"].
    " - email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>