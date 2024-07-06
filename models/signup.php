<?php
include('../include/database.php');
session_start();
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password1"];
$role = $_POST["role"]; // 获取role字段的值

try {
    // 设置PDO的错误模式为异常
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 检查email是否已经存在
    $stmt_check = $PDO->prepare("SELECT * FROM user_info WHERE email = :email");
    $stmt_check->execute(array(':email' => $email));
    $row = $stmt_check->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // 如果邮箱已存在，则提示用户，并在3秒后返回上一个页面
        echo '<script>
                alert("Email already exists. Please use a different email.Click to return");
                history.back();
              </script>';
        exit; // 结束脚本执行
    } else {
        // 插入新用户信息到user_info表中，包括role字段
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // 使用默认的密码哈希算法加密密码
        $stmt_insert = $PDO->prepare("INSERT INTO user_info (firstname, lastname, email, password, role) VALUES (:firstname, :lastname, :email, :password, :role)");
        $stmt_insert->bindParam(':firstname', $firstname);
        $stmt_insert->bindParam(':lastname', $lastname);
        $stmt_insert->bindParam(':email', $email);
        $stmt_insert->bindParam(':password', $hashed_password);
        $stmt_insert->bindParam(':role', $role); // 绑定role参数
        
        if ($stmt_insert->execute()){
            $_SESSION["email"] = $email;
            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] = $lastname;
            echo '<script>
                alert("Successfully created!");
                window.location.href = "../views/create_view.php";
              </script>';
        }else{
            echo '<script>
                alert("Failed to create!");
                history.back();
              </script>';
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
