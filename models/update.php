<?php
session_start();
include('../include/database.php');

// 获取表单提交的数据
$email = $_SESSION["email"];
$old_password = $_POST["oldPassword"];
$new_password = $_POST["newPassword"];

try {
    // 设置PDO的错误模式为异常
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 查询用户信息
    $stmt_check = $PDO->prepare("SELECT * FROM user_info WHERE email = :email");
    $stmt_check->execute(array(':email' => $email));
    $row = $stmt_check->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // 验证旧密码
        $hashed_password = $row['password'];
        if (password_verify($old_password, $hashed_password)) {
            // 旧密码正确，更新新密码
            // 生成新密码的哈希值
            $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);

            // 更新数据库中的密码
            $stmt_update = $PDO->prepare("UPDATE user_info SET password = :password WHERE email = :email");
            $stmt_update->execute(array(':password' => $hashed_new_password, ':email' => $email));

            // 提示用户密码修改成功，并进行相关操作（例如重定向到其他页面）
            echo 'Password updated successfully!';
            exit;
        } else {
            // 旧密码错误，给出提示
            echo "Incorrect old password.";
        }
    } else {
        // 用户不存在，给出提示
        echo "User not found.";
    }
} catch (PDOException $e) {
    // 捕获异常
    echo "Error: " . $e->getMessage();
}
?>
