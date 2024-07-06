var img1 = document.getElementById('eye1');
var img2 = document.getElementById('eye2');
var passsword1 = document.getElementById('password1');
var passsword2 = document.getElementById('password2');

img1.addEventListener('click',function changeImage() {
    
    if (img1.src.includes("hidden.png")) {
        img1.src = "../src/images/show.png";
        passsword1.type = "text";
    } else {
        img1.src = "../src/images/hidden.png";
        passsword1.type = "password";
    }
});

img2.addEventListener('click',function changeImage() {
    
    if (img2.src.includes("hidden.png")) {
        img2.src = "../src/images/show.png";
        passsword2.type = "text";
    } else {
        img2.src = "../src/images/hidden.png";
        passsword2.type = "password";
    }
});

function validateForm() {
    var firstname = document.getElementById('firstname').value;
    var secondname = document.getElementById('secondname').value;
    var email = document.getElementById('email').value;
    var password1 = document.getElementById('password1').value;
    var password2 = document.getElementById('password2').value;

    if (email.trim() === '' || password1.trim() === ''||password2.trim() === ''||firstname.trim() === ''||secondname .trim() === '') {
        alert('Please enter all information');
        return false; // 阻止表单提交
    }else if(password1.trim() != password2.trim()){
        alert('Passwords do not match.');
        return false; // 阻止表单提交

    }

    return true; // 允许表单提交
}