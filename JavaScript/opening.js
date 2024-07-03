let togBtn = document.getElementById("togBtn");
let lgedBtn = document.getElementById("lgedBtn");
const dropdownBtn = document.getElementById('lgedBtn');
const dropdownContent = document.getElementById('content');

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

function lgedBtnClick() {

    if (toggleContent.style.display === "block") {
        togBtn.textContent = "∨";
        toggleContent.style.display = "none";
    } else {
        togBtn.textContent = "∧";
        toggleContent.style.display = "block";
    }
}

window.onload = function() {
    togBtn.onclick = toggleDropdown;
    
};

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

  // 点击下拉列表项后隐藏下拉列表（可选）
  dropdownContent.addEventListener('click', function() {
    dropdownContent.style.display = 'none';
  });