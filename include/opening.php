<?php
    session_start();
    //$_SESSION['login'] = "login";
    if(isset($_SESSION['login'])){
        // $role= $_SESSION['role'];
        echo $_SESSION['login'];
    }else{
        $role = null;
    }
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>Doodle</title>
    <meta charset="utf-8" />
    <link href="../css/opening.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="banner">
        <img id="bannerImg" src="../src/images/logo.png" alt="Logo"/>
        <a id="Doodle">Doodle</a>
        <ul>
            <li><a  id="togBtn">Product ∨</a>
                <ul class="dropdown-content">
                    <li><a href="#">1:1s</a></li>
                    <li><a href="#">Group polls</a></li>
                    <li><a href="#">Booking page</a></li>
                    <li><a href="#">Sign-up Sheet</a></li>
                </ul>
            </li>
            <li><a href="#">Why Doodle?</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <?php 
            if(isset($_SESSION['login'])){
				echo '<a  id="lgedBtn">';
                echo '</a>
                    <ul id="content">
                        <li><a href="#">Modify Info</a></li>
                        <li><button>Sign out</button></li>
                    </ul><button id = "createBtn">+ Create a Doodle</button> ';

			}else{
				echo '<button id="lgBtn">Log in</button>
                      <button id = "SignBtn">Sign up</button>
                      <button id = "createBtn">+ Create a Doodle</button>';
			}
		?>
    </div>

    <script src="../JavaScript/opening.js"></script>
</body>
</html>
