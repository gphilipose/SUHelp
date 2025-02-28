
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
                <h3>Disability Services</h3>
            </section>
            <section>
                <h4 class="center">SU Resources</h4>
                <div class="evenDisplay">
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Disabilities Services (DS)</b>
                                <br> <span>Loyola Hall 100 8:00am-4:30pm</span>
                                <br> <span>Phone: 206-296-5740<br>Testing Center: 206-398-4378<br>Fax: 206-296-5747</span>
                                <br> <span>ds@seattleu.edu</span>
                            </div>    
                            <span class="tooltipText">
                                DS recognizes disability as a valued aspect of diversity and to embrace access as a significant component of social justice.
                                <br><br> <a href="https://www.seattleu.edu/disability-services/">Website</a>
                            </span>                
                        </div>
                    </div>
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Virtual Lobby</b>
                                <br> <span>Monday-Friday 9:00am-3:00pm</span>
                            </div>
                            <span class="tooltipText">
                                Join the Virtual Lobby to attend a Zoom meeting, make an appointment, or ask a drop-in question!
                                <br><br> <a href="https://seattleu.zoom.us/j/98659175344">Online Link</a>
                            </span>
                        </div>
                    </div>
                    <div class="article">
                        <div class="articleText">
                            <b>Accomodation Applications</b>
                            <br> <span><a href="https://cm.maxient.com/reportingform.php?SeattleUniv&layout_id=17">Law Student Application Page</a></span>
                            <br> <span><a href="https://rainier.accessiblelearning.com/SeattleU/ApplicationStudent.aspx">Non-Law Student Application Form</a></span>
                            <br> <span>An appointment/meeting will follow after the applications have been processed.</span>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h4 class="center">Community ADHD & Learning Disability Evaluations</h4>
                <div class="evenDisplay">
                    <div class="tooltip">              
                        <div class="article">
                            <div class="articleText">
                                <b>Suie Change Ngai, PsyD, PLLC<br>Suie Chang Therapy</b>
                                <br> <span>Renton</span>
                                <br> <span>206-981-6826</span>
                                <br> <span>schangtherapy@gmail.com</span>
                            </div>
                            <span class="tooltipText">
                                Currently only providing services via telehealth.
                            </span>             
                        </div>
                    </div>
                      
                    <div class="tooltip">              
                        <div class="article">
                            <div class="articleText">
                                <b>Sally Chung, PsyD</b>
                                <br> <span>Bellevue</span>
                                <br> <span>206-489-3151</span>
                                <br> <span>talk@drsallychung.com</span>
                            </div> 
                            <span class="tooltipText">
                                Fee for psychological assessment is $200 per hour.
                                <br>A deposit of $500 is due on the first date of service.
                            </span>             
                        </div>
                    </div>
                    <div class="article">
                        <div class="articleText">
                            <b>Julie Davies, Ph.D</b>
                            <br> <span>Oak Harbor</span>
                            <br> <span>206-718-0906</span>
                            <br> <span>drdavies@connectionspsychology.com</span>
                        </div>
                    </div>
                    <div class="tooltip">              
                        <div class="article">
                            <div class="articleText">
                                <b>PEAK Psychological Wellness</b>
                                <br> <span>Seattle</span>
                                <br> <span>info@peakpsychological.com</span>
                                <br> <span>206-552-8491</span>
                            </div>
                            <span class="tooltipText">
                                Fee for comprehensive psychological evaluations is $215 per hour.
                                <br>After intake a deposite of $250 is due to book testing sessions.
                            </span>             
                        </div>
                    </div>
                    <div class="article">
                        <div class="articleText">
                            <b>Lighthouse Psychological Services</b>
                            <br> <span>Edmonds</span>
                            <br> <span>425-200-4065</span>
                        </div>
                    </div>
                    <div class="article">
                        <div class="articleText">
                            <b>NUHope Assessment Services</b>
                            <br> <span>Kirkland</span>
                            <br> <span>425-889-5261</span>
                            <br> <span>nuhopeinfo@northwestu.edu</span>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section>
                <h4 class="center">Reviews

<div class="sign">
<a href="disabilityComment.html" class="button"><button id="signSubmit"><h3>Add Review</h3></button></a>

</div>


</h4>
                <div class="reviewsBox">
                    <span>


<?php
$servername = "cssql.seattleu.edu";
$username = "";
$password = "";
$dbname = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT USER_REVIEW FROM REVIEWS WHERE CATEGORY = 1";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {

// output data of each row
while($row = mysqli_fetch_row($result)) {
for ($i = 0; $i < mysqli_num_fields($result); $i++) {
echo $row[$i] . "<br> <br>";
}
}
} else {
echo "0 results";
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

