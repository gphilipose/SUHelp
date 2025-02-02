
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
</body>
</html>




<?php
$servername = "cssql.seattleu.edu";
$username = "ll_gphilipose";
$password = "r4BB4/4wX8eBo9bZ";
$dbname = "ll_gphilipose";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$review = trim($_POST['review']);
$category = 3;

$stmt = $conn->prepare("INSERT INTO REVIEWS (USER_REVIEW, CATEGORY) VALUES (?, ?)");

$stmt->bind_param("si", $review, $category);



if ($stmt->execute()) {
	echo "Review received!";
 	echo "<br>";
     	echo '<a href="https://css1.seattleu.edu/~gphilipose/financial.php">Go back to the previous page</a>';
} else {
     echo "Error: " . $stmt->error;
}

$conn->close();
?>















