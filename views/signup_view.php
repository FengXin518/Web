<!DOCTYPE html>
<html>
    <body>
        <link href="../css/signup.css" type="text/css" rel="stylesheet">

        <div id="content-1">
            <a href="../views/home.php"><img src="../src/images/logo.png"></a>
            <a href="../views/home.php">Doodle</a>
        </div>
        <div id="content-2">
            <div>
                <label id="title">Let's retake your calendar, together</label>
                <label style="font-size:20px;color:#484a55;margin-bottom: 40px;text-align:center;max-width:75%">
                Schedule faster, get the right people together, and manage your time at work better. That's Doodle.
                </label>
            </div>
            <div>
            <form action="../models/signup.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                <input type="hidden" name="role" value="casual">
                <span>First name</span><br>
                <div>
                    <input id="firstname" type="text" name="firstname" placeholder="Enter your first name">
                </div>
                <span>Second name</span><br>
                <div>
                    <input id="lastname" type="text" name="lastname" placeholder="Enter your lastname">
                </div>
                <span>Work email</span><br>
                <div>
                    <input id="email" type="text" name="email" placeholder="you@example.com">
                </div>
                <span>Your password</span><br>
                <div class="passwordContainer">
                    <input type="password" id="password1" name="password1" placeholder="Password" pattern="^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{7,}$" title="Password must contain only letters and numbers, and be at least 7 characters long" required><br>
                    <span id="togglePassword">
                        <img id="eye1" src="../src/images/hidden.png" alt="显示密码">
                    </span>
                </div>
                <span>Conform your password</span><br>
                <div class="passwordContainer">
                <input type="password" id="password2" name="password2" placeholder="Confirm Password" pattern="^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{7,}$" title="Password must contain only letters and numbers, and be at least 7 characters long" required><br>
                    <span id="togglePassword">
                        <img id="eye2" src="../src/images/hidden.png" alt="显示密码">
                    </span>
                </div>
                <br>
                <input id="submit" type="submit" value="Create account">
            </form>
            </div>
        </div>      
        
    <script src="../JavaScript/signup.js"></script>
	</body>
</html>



