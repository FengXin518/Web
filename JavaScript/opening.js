let togBtn = document.getElementById("togBtn");

function toggleDropdown() {
    let toggleContent = document.getElementsByClassName("dropdown-content")[0]; // 获取第一个 dropdown-content 元素

    if (toggleContent.style.display === "block") {
        togBtn.textContent = "Product ∨";
        toggleContent.style.display = "none";
    } else {
        togBtn.textContent = "Product ∧";
        toggleContent.style.display = "block";
    }
}

window.onload = function() {
    togBtn.onclick = toggleDropdown;
};