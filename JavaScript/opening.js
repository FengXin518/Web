let togBtn = document.getElementById("togBtn");
const dropdownBtn = document.getElementById('lgedBtn');
const dropdownContent = document.getElementById('content');

togBtn.addEventListener('click',function toggleDropdown() {
    let toggleContent = document.getElementsByClassName("dropdown-content")[0]; // 获取第一个 dropdown-content 元素

    if (toggleContent.style.display === "block") {
        togBtn.textContent = "Product ∨";
        toggleContent.style.display = "none";
    } else {
        togBtn.textContent = "Product ∧";
        toggleContent.style.display = "block";
    }
});

// 点击按钮显示/隐藏下拉列表
dropdownBtn.addEventListener('click', function() {
    if (dropdownContent.style.display === 'block') {
      dropdownContent.style.display = 'none';
    } else {
      // 计算按钮的位置，并设置下拉列表的位置
      const rect = dropdownBtn.getBoundingClientRect();
      dropdownContent.style.left = rect.left + 'px';
      dropdownContent.style.top = rect.bottom + 'px';
      dropdownContent.style.display = 'block';
    }
});

function openModal() {
    document.getElementById('modal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('modal').style.display = 'none';
}

function submitPasswordChange() {
    var oldPassword = document.getElementById('old-password').value;
    var newPassword = document.getElementById('new-password').value;
    var confirmPassword = document.getElementById('confirm-password').value;

    if (newPassword !== confirmPassword) {
        alert('新密码和确认新密码不匹配！');
        return;
    }

    // 创建 XMLHttpRequest 对象
    var xhr = new XMLHttpRequest();
    
    // 设置 POST 请求到的 PHP 文件路径
    var url = "../models/update.php";
    
    // 设置回调函数
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // 成功接收到响应
                var response = xhr.responseText;
                alert(response); // 弹出 PHP 返回的消息
                closeModal(); // 关闭浮窗
            } else {
                // 发生错误
                alert('请求出错：' + xhr.status);
            }
        }
    };
    
    // 设置请求方法和 URL
    xhr.open("POST", url, true);
    
    // 设置请求头
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    // 发送请求，将数据作为参数传递
    var params = "oldPassword=" + oldPassword + "&newPassword=" + newPassword;
    xhr.send(params);
}
