<?php
    include('../include/opening.php');
    $moviedbFilePath = '../moviedb/';
    $directories = glob($moviedbFilePath . '*', GLOB_ONLYDIR);
?> 
<!-- To complete -->
<!DOCTYPE html>
<html>
    <body>
        <link href="../css/home.css" type="text/css" rel="stylesheet">

        <div id="content-1">
            <div id="left">
                <label class="text1">Professional </label>
                <label class="text1">scheduling</label>
                <label class="text1">made easy</label>
                <label id="text">Doodle is the fastest and easiest way to schedule anything — from meetings to the next great collaboration. </label>
                <button>Create a Doodle</button>
            </div>
            <img src="../src/images/Group.png"/>
        </div>
        <div id="content-2">
            <div>
                <img src="../src/images/first-icon.webp">
                <label>Trusted by 70,000+ companies</label>
            </div>
            <div>
                <img src="../src/images/second-icon.webp">
                <label>2+ million meetings scheduled last month</label>
            </div>
            <div>
                <img src="../src/images/third-icon.webp">
                <label>Enterprise-level security</label>
            </div>
            <div>
                <img src="../src/images/fourth-icon.webp">
                <label>Start taking appointments in 5 minutes</label>
            </div>
        </div>
        <?php
	        include('../include/closing.html');
        ?>
	</body>
</html>



