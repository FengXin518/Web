<?php
session_start();
include('../include/database.php');
$email = $_POST["email"];
$password = $_POST["password"];

try {
    // 设置PDO的错误模式为异常
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 查询用户信息
    $stmt_check = $PDO->prepare("SELECT * FROM user_info WHERE email = :email");
    $stmt_check->execute(array(':email' => $email));
    $row = $stmt_check->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // 验证密码
        $hashed_password = $row['password'];
        if (password_verify($password, $hashed_password)) {
            // 密码正确，认证成功，设置SESSION，并跳转到指定页面
            $_SESSION["email"] = $email;
            $_SESSION["firstname"] = $row['firstname']; // 正确的变量名
            $_SESSION["lastname"] = $row['lastname']; // 正确的变量名
            header("Location: ../views/create_view.php"); // 跳转到指定页面
            exit; // 结束脚本执行
        } else {
            // 密码错误
            echo '<script>
                alert("Incorrect password!");
                window.location.href = "../views/login_view.php";
              </script>';
        }
    } else {
        // 邮箱不存在
        echo '<script>
                alert("Email not found!");
                window.location.href = "../views/login_view.php";
              </script>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
