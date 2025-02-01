<?php
$servername = "cssql.seattleu.edu";
$username = "ll_gphilipose";
$password = "r4BB4/4wX8eBo9bZ";
$dbname = "ll_gphilipose";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST["email"];
$newaddress = $_POST["newaddress"];
$sql = "UPDATE users SET address = '$newaddress' WHERE email='$email'";
echo $sql . "<br>";
$result = mysqli_query($conn, $sql);
if ($result) {
 echo "Address changed!";
} else {
 echo "Cannot change address!";
}
mysqli_close($conn);
?> 