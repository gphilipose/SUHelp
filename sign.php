<html><head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Database</title>
    <link rel="stylesheet" type="text/css" href="style.css"></head>
    <body bgcolor="ffffff"> 
<div class="header">
    <img src="logo.jpg" width="110" height="100">
    <div class="buttons">
      <a href="index.html"><button><h3>Movies</h3></button></a>
      <a href="template.html"><button><h3>Template</h3></button></a>        
      <a href="signUp.html"><button><h3>Sign Up</h3></button></a>
      <a href="login.html"><button><h3>Login</h3></button></a>
    </div>
</div> 
<br>


</body></html>




<?php
$servername = "cssql.seattleu.edu";
$username = "ll_gphilipose";
$password = "r4BB4/4wX8eBo9bZ";
$dbname = "ll_gphilipose";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
//echo $_POST;
//echo $_POST['fname'];




$fname = trim($_POST['fname']);
$lname = trim($_POST['lname']);
$email = strtolower(trim($_POST['email']));
$userTag = trim($_POST['userTag']);
$password = trim($_POST['password']);

//echo $fname . "<br>";
//echo $lname . "<br>";
//echo $email . "<br>";
//echo $userTag . "<br>";
//echo $password . "<br>";


//$sql = "INSERT INTO USER (USER_FNAME, USER_LNAME, USER_EMAIL, USER_TAG, USER_PASSWORD) VALUES" . $fname . ", " . $lname . ", " . $email . ", " . $userTag . ", " . $password . ")"; 


//$sql = $_POST["query"];

//$result = mysqli_query($conn, $sql);


$stmt = $conn->prepare("INSERT INTO USER (USER_FNAME, USER_LNAME, USER_EMAIL, USER_TAG, USER_PASSWORD) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $fname, $lname, $email, $userTag, $password);
//mysqli_query($conn, $sql);



if ($stmt->execute()) {
    echo "Data inserted successfully!";
	echo "<br>";
    echo '<a href="index.html">Go back to the home page</a>';
} else {
    echo "Error: " . $stmt->error;
}
//if ($conn->query($sql) === TRUE) {
//    echo "Sign-up successful!";
//    echo '<a href="index.html">Go back to the home page</a>';
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

$conn->close();
?>















