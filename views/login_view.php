<!DOCTYPE html>
<html>
    <body>
        <link href="../css/login.css" type="text/css" rel="stylesheet">

        <div id="content-1">
            <a href="../views/home.php"><img src="../src/images/logo.png"></a>
            <a href="../views/home.php">Doodle</a>
        </div>
        <div id="content-2">
            <div>
                <label id="title">Nice to see you again</label>
                <label style="font-size:17px;color:#484a55;margin-bottom: 40px;">Log in and get back to smooth scheduling</label>
            </div>
            <div>
            <form action="../models/login.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                <span>Work email</span><br>
                <div>
                    <input id="email" type="text" name="email" placeholder="you@example.com">
                </div>
                <span>Your password</span><br>
                <div id="passwordContainer">
                    <input id="password" type="password" name="password" placeholder="Enter password">
                    <span id="togglePassword">
                        <img id="eye" src="../src/images/hidden.png" alt="显示密码">
                    </span>
                </div>
                <br>
                <input id="submit" type="submit" value="Log in">
            </form>
            </div>
        </div>      
        
    <script src="../JavaScript/login.js"></script>
	</body>
</html>



