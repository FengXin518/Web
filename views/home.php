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

        <div id="content">
            <div id="left">
                <label class="text1">Professional </label>
                <label class="text1">scheduling</label>
                <label class="text1">made easy</label>
                <label id="text">Doodle is the fastest and easiest way to schedule anything — from meetings to the next great collaboration. </label>
                <button>Create a Doodle</button>
            </div>
            <img src="../src/images/Group.png"/>
        </div>
        <?php
	        include('../include/closing.html');
        ?>
	</body>
</html>



