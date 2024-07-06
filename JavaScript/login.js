var img = document.getElementById('eye');
var passsword = document.getElementById('password');

img.addEventListener('click',function changeImage() {
    
    if (img.src.includes("hidden.png")) {
        img.src = "../src/images/show.png";
        passsword.type = "text";
    } else {
        img.src = "../src/images/hidden.png";
        passsword.type = "password";
    }
});

function validateForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (email.trim() === '' || password.trim() === '') {
        alert('Please enter both email and password.');
        return false; // 阻止表单提交
    }

    return true; // 允许表单提交
}