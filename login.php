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
session_start();

$servername = "cssql.seattleu.edu";
$dbUsername = "ll_gphilipose";
$dbPassword = "r4BB4/4wX8eBo9bZ";
$dbName = "ll_gphilipose";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $USERTAG = null;
    $email = strtolower(trim($_POST['USER_EMAIL']));
    $password = trim($_POST['USER_PASSWORD']);

    echo "Input email: $email<br>";
    echo "Input password: $password<br>";

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT USER_ID, USER_EMAIL, USER_PASSWORD, USER_TAG FROM USER WHERE USER_EMAIL = ?");
if (!$stmt) {
    die("Statement preparation failed: " . $conn->error);
}

$stmt->bind_param("s", $email);
if (!$stmt->execute()) {
    die("Query execution failed: " . $stmt->error);
}
    //$stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        //Debugging outputs
        echo "Database email: " . $user['USER_EMAIL'] . "<br>";
        echo "Database password: " . $user['USER_PASSWORD'] . "<br>";

        // Compare passwords (case-sensitive)
        if ($password === $user['USER_PASSWORD']) {
	    //echo $user['USER_TAG'];
            echo "Login successful!";
            $_SESSION['user_id'] = $user['USER_ID'];
            $_SESSION['email'] = $user['USER_EMAIL'];
	    //echo $user['USER_ID'];
	    $USERTAG = $user['USER_TAG'];

        } else {
            echo "Incorrect email or password.";

        }
    } else {
	echo "Database email: " . $user['USER_EMAIL'] . "<br>";
        echo "Database password: " . $user['USER_PASSWORD'] . "<br>";
        echo "User not found.";
    }

    $stmt->close();
}

$conn->close();
?>

<script>
var jsVar = <?php echo json_encode($USERTAG); ?>;
//confirm(jsVar);
localStorage.setItem("user", jsVar);
localStorage.setItem("loggedIn", 1);
if(jsVar!=null) {
	const logout = this.document.getElementById("logout");
	const sign = this.document.getElementById("signRemove");
  	const login = this.document.getElementById("loginRemove");
	sign.style.display='none';
	login.style.display='none';
	logout.style.display='';
}
</script>


