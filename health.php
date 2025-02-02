
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
                <h3>Health Services</h3>
            </section>
            <section>
                <h4 class="center">SU Resources</h4>
                <div class="evenDisplay">
                    <div class="article">
                        <div class="articleText">
                            <b>Student Health Center (SHC)</b>
                            <br> <span>Bellarmine 107</span>
                            <br> <span>206-296-6300</span>
                            <br> <span>studenthealthcenter@seattleu.edu</span>
                        </div>
                    </div>
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Peer to Peer Chats</b>
                                <br> <span>Student Center 380</span>
                            </div>
                            <span class="tooltipText">Chats Connect with Wellness and Health Promotion's Peer Health Educators (PHEs) for one-on-one support on various health-related topics.</span>
                        </div>
                    </div>
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Individual Counseling</b>
                                <br> <span>PAVL 120</span>
                                <br> <span>Mondays - Fridays</span>
                                <br> <span>8:30am - 4:30pm PST</span>
                            </div>
                            <span class="tooltipText">
                                The primary service CAPS offers is our short-term, individual counseling, which is free for enrolled Seattle University students.
                                <br><br> <a href="caps@seattleu.edu">Website</a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="evenDisplay">
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Group Therapy</b>
                                <br> <span>PAVL 120</span>
                                <br> <span>Mondays - Fridays</span>
                                <br> <span>8:30am - 4:30pm PST</span>
                            </div>
                            <span class="tooltipText">
                                Provides students with an avenue to discuss and process mental health concerns collectively.
                                <br><br> <a href="caps@seattleu.edu">Website</a>
                            </span>
                        </div>
                    </div>                
                    <div class="article">
                        <div class="articleText">
                            <b>Office of Institutional Equity (OIE)</b>
                            <br> <span>Loyola Hall 300</span>
                            <br> <span>206-296-2824</span>
                            <br> <span>oie@seattleu.edu</span>
                            <br> <a href="https://www.seattleu.edu/office-of-institutional-equity/">Website</a>
                        </div>              
                    </div>
                    <div class="article">
                        <div class="articleText">
                            <b>Dean of Students Office</b>
                            <br> <span>Student Center 140</span>
                            <br> <span>206-296-6060</span>
                            <br> <span>deanofstudents@seattleu.edu</span>
                            <br> <a href="https://www.seattleu.edu/office-of-the-dean-of-students/">Website</a>
                        </div>
                    </div>
                    <div class="article">
                        <div class="articleText">
                            <b>Lactation Spaces</b>
                            <br> <span>SINE 265</span>
                            <br> <span>ADMIN 200</span>
                            <br> <span>Garrand Building 101</span>
                            <br> <span>Columbia Building 120-02</span>
                        </div>
                    </div>

                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Ronald A. Peterson Law Clinic</b>
                                <br> <span>Sullivan Hall 115</span>
                                <br> <span>caps@seattleu.edu</span>
                            </div>    
                            <span class="tooltipText">
                                The clinic program provides valuable, high-quality legal services to clients who are unable to afford a lawyer.
                                <br><br> <a href="https://www.seattleu.edu/life-at-seattle-u/health-wellness/caps/">Website</a>
                            </span>                
                        </div>
                    </div>
                    <div class="tooltip">
                        <div class="article">
                            <div class="articleText">
                                <b>Campus Ministry & Resident Ministers</b>
                                <br> <span>Student Center 120</span>
                                <br> <span>206-296-6075</span>
                                <br> <span>campusministry@seattleu.edu</span>
                            </div>
                            <span class="tooltipText">
                                Campus Ministry is committed to caring for students as a whole people. All students are welcome to seek support from a member of the Campus Ministry team or other ministry partners at any point during their time at SU.
                                <br><br> <a href="https://www.seattleu.edu/life-at-seattle-u/faith-spirituality-and-meaning/campus-ministry/">Website</a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section>
                <h4 class="center">Reviews
<div class="sign">
<a href="healthComment.html" class="button"><button id="signSubmit"><h3>Add Review</h3></button></a>

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
$sql = "SELECT USER_REVIEW FROM REVIEWS WHERE CATEGORY = 4";
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


