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
          <a href="signUp.html"><button id="signRemove"><h3>Sign Up</h3></button></a>
          <a href="login.html"><button id="loginRemove"><h3>Login</h3></button></a>
		  <button id="logout"><h3>Log Out</h3></button>
        </div>
    </div> 
<br>


<script src="script.js"></script>

</body></html>



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


$sql = $_POST["query"];
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
echo "<table border = '1'>\n";

echo "<tr>\n";
while($column = $result->fetch_field()) {

echo "<th>" . $column->name . "</th>";

}
echo "</tr>\n";

// output data of each row
while($row = mysqli_fetch_row($result)) {
echo "<tr>\n";
for ($i = 0; $i < mysqli_num_fields($result); $i++) {
echo "<td>" . $row[$i] . "</td>\n";
}
echo "</tr>\n";
}
echo "</table>\n";
} else {
echo "0 results";
}


mysqli_free_result($result);
mysqli_close($conn);
?>
















