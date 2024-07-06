<?php
    session_start();
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
        <a id="Doodle" href="../views/home.php">Doodle</a>
        <ul>
            <li><a  id="togBtn">Product ∨</a>
                <ul class="dropdown-content">
                    <li><a href="#">1:1s</a></li>
                    <li><a href="#">Group polls</a></li>
                    <li><a href="#">Booking page</a></li>
                    <li><a href="../views/signup_view.php">Sign-up Sheet</a></li>
                </ul>
            </li>
            <li><a href="#">Why Doodle?</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <?php 
            if(isset($_SESSION['email'])){
				echo '<a  id="lgedBtn">';
                echo substr(trim($_SESSION['firstname']), 0, 1).substr(trim($_SESSION["lastname"]), 0, 1);
                echo '</a>
                    <ul id="content">
                        <li><button onclick="openModal()">Change password</button></li>
                        <li><a href="../models/signout.php">Sign out</a></li>
                    </ul>';

			}else{
				echo '<a id="lginBtn" href="../views/login_view.php">Log in</a>
                      <a id="SignUpBtn" href="../views/signup_view.php">Sign up</a>
                      <a id="createBtn" href="../views/create_view.php">+ Create a Doodle</a>';
			}
		?>
    </div>
    <div class="modal" id="modal">
        <div class="modal-content">
            <h2>change password</h2>
            <input type="password" id="old-password" placeholder="old password" required>
            <input type="password" id="new-password" placeholder="new password" required>
            <input type="password" id="confirm-password" placeholder="conform new password" required>
            <button class="cancel-btn" onclick="closeModal()">cancel</button>
            <button class="confirm-btn" onclick="submitPasswordChange()">conform</button>
        </div>
    </div>
    <script src="../JavaScript/opening.js"></script>
</body>
</html>
