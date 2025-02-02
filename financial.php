
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Database</title>
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
            <br>
            <section class="center red">
                <h3>Financial Services</h3>
            </section>
            <section>
                <h4 class="center">SU Resources</h4>
                <div class="evenDisplay">
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Drop-in Counselors</b>
                                <br> <span>Vi Hilbert Hall, 2nd floor</span>
                                <br> <span>Monday-Friday 10:00am-3:00pm</span>
                                <br> <span>financialservices@seattleu.edu</span>
                            </div>                    
                            <span class="tooltipText">Financial counseling drop-ins! Welcome Monday through Friday from 10:00am to 3:00pm.</span>
                        </div>
                    </div>
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Free Frozen Meals</b>
                                <br> <span>Student Center 380</span>
                                <br> <span>Monday-Friday 11:30am-1pm</span>
                            </div>
                            <span class="tooltipText">Wellness and Health Promotion is here for you! We are all about supporting student access to adequate nutrition so swing by for a free frozen meal-no questions asked!</span>
                        </div>
                    </div>
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Wellness Cafe and Food Pantry</b>
                                <br> <span>Pavilion 150</span>
                                <br> <span>Tuesday and Wednesday 2pm-6pm and Thursdays 3pm-5pm</span>
                            </div>
                            <span class="tooltipText">All students at SU are eligible to utilize the Wellness Cafe and Food Pantry which offers pantry staples to students once per week.</span>
                        </div>
                    </div>
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Food Security</b>
                                <br> <span>Pavilion 150</span>
                                <br> <span>wellness@seattleu.edu</span>
                                <br> <span>Phone: 206-220-8450</span>
                            </div>
                            <span class="tooltipText">
                                Wellness and Health Promotion supports Seattle University students experiencing food insecurity.
                                <br><br> <a href="https://redhawksgive.seattleu.edu/campaigns/food-security-initiative">Food Security Initiative</a>
                            </span>
                        </div>
                    </div>
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Supplemental Nutrition Assistance Program (SNAP)</b>
                                <br> <span>Family Food Hotline: 1-888-436-6392</span>
                                <br> <span>Phone: 1-877-501-2233<br>Monday-Friday 8am-3pm</span>
                            </div>
                            <span class="tooltipText">
                                Check if you are eligible for the assistance program! After application, you will need to follow up with a DSHS phone interview.
                                <br><br> <a href="https://www.fns.usda.gov/snap/supplemental-nutrition-assistance-program">About SNAP</a>
                            </span>
                        </div>
                    </div>
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>ThreadHawk Thrift</b>
                                <br> <span> Pigott 110</span>
                            </div>
                            <span class="tooltipText">Need professional wear for any career, interviewing, or networking events? Come and shop at the ThreadHawk Thrift event where you can get FREE clothing! (Once a year opportunity)</span>
                        </div>
                    </div>
                </div>
            </section>            <br>
            <section>
                <h4 class="center">
Reviews

<div class="sign">
<a href="financialComment.html" class="button"><button id="signSubmit"><h3>Add Review</h3></button></a>

</div>





</h4>
                <div class="reviewsBox">
                    <span>


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
$sql = "SELECT USER_REVIEW FROM REVIEWS WHERE CATEGORY = 3";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {

// output data of each row
while($row = mysqli_fetch_row($result)) {
for ($i = 0; $i < mysqli_num_fields($result); $i++) {
echo $row[$i] . "<br> <br>";
}
}
} else {
echo "0 reviews";
}


mysqli_free_result($result);
mysqli_close($conn);
?>


		    </span>
                </div>
            </section>
        </main>    
</body>

</html>

