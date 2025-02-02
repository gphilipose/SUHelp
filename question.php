
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Database</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
   <nav class="rowDisplay red">
    <img src="logo.png" width="110" height="100">
    <a href="https://gphilipose.github.io/SUHelp/index.html"><h3>Home</h3></a>
    <a href="https://css1.seattleu.edu/~gphilipose/question.html"><h3>Questions</h3></a>
    <a href="https://css1.seattleu.edu/~gphilipose/disability.php"><h3>Disability</h3></a>
    <a href="https://css1.seattleu.edu/~gphilipose/abuse.php"><h3>Abuse</h3></a>
    <a href="https://css1.seattleu.edu/~gphilipose/financial.php"><h3>Financial</h3></a>
    <a href="https://css1.seattleu.edu/~gphilipose/health.php"><h3>Health</h3></a>
    <a href="https://gphilipose.github.io/SUHelp/search.html"><h3>Search Resources</h3></a>
    </nav>
  <main>




  </main>
  <script src="script.js"></script>
</body>
</html>




<?php
$servername = "cssql.seattleu.edu";
$username = "";
$password = "";
$dbname = "";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$email = strtolower(trim($_POST['email']));
$question = trim($_POST['qc']);

$stmt = $conn->prepare("INSERT INTO USER (USER_QUESTION, USER_EMAIL) VALUES (?, ?)");

$stmt->bind_param("ss", $question, $email);



if ($stmt->execute()) {
	echo "Question received!";
	echo "We will get back to you shortly.";
 	echo "<br>";
     	echo '<a href="https://gphilipose.github.io/SUHelp/index.html">Go back to the home page</a>';
} else {
     echo "Error: " . $stmt->error;
}

$conn->close();
?>















