function $id(id) {
  return document.getElementById(id);
}

// 手機會員登入文字按鈕
function navLoginIconP() {
  $id("member-login").style.display = "inline-block";
}
// 會員登入文字按鈕
function navLoginIcon() {
  $id("member-login").style.display = "inline-block";
}
// 取回密碼－面板關掉
function pswBack() {
  $id("login-interface").style.display = "none";
  $id("retrieve-password").style.display = "block";
}
// 註冊會員－面板關掉
function register() {
  $id("login-interface").style.display = "none";
  $id("retrieve-password").style.display = "none";
  $id("register-account").style.display = "block";
}
// 註冊會員-面板關掉
function registerAccountCoseButton() {
  $id("login-interface").style.display = "block";
  $id("register-account").style.display = "none";
  $id("member-login").style.display = "none";
  //註冊會員-清空值
  $id("register-account-mem-name").value = "";
  $id("register-account-mem-id").value = "";
  $id("register-account-mem-psw").value = "";
  $id("register-account-confirm-mem-psw").value = "";
  $id("register-account-email-address").value = "";
  //會員登入-清空值
  $id("mem-id").value = "";
  $id("mem-psw").value = "";
  //取回密碼-清空值
  $id("retrieve-mem-id").value = "";
  $id("email-address").value = "";
}
//登入－面板關掉
function memberLoginCloseButton() {
  $id("member-login").style.display = "none";
  $id("mem-id").value = "";
  $id("mem-psw").value = "";
  $id("retrieve-mem-id").value = "";
  $id("email-address").value = "";
}
//取回密碼－面板關掉
function retrievePasswordCloseButton() {
  $id("member-login").style.display = "none";
  $id("login-interface").style.display = "block";
  $id("retrieve-password").style.display = "none";
  //會員登入-清空值
  $id("mem-id").value = "";
  $id("mem-psw").value = "";
  //取回密碼-清空值
  $id("retrieve-mem-id").value = "";
  $id("email-address").value = "";
}

var mem_id_hide = "";
function sendForm() {
  //=====使用Ajax 回server端,取回登入者姓名, 放到頁面上  送出檢查帳號密碼
  //..........................................................
  var xhr = new XMLHttpRequest();

  xhr.onload = function() {
    if (xhr.status == 200) {
      console.log(xhr.responseText);
      if (xhr.responseText == "1") {
        alert("帳密錯誤");
      } else {
        //登入成功
        alert("登入成功！");
        $id("mem_id_hide").innerHTML = xhr.responseText;
        // echo過來的字串
        console.log(xhr.responseText);

        // mem_id_hide
        //將登入表單上的資料清空，並隱藏燈箱
        $id("member-login").style.display = "none";
        $id("mem_id").value = "";
        $id("mem_psw").value = "";
        $id("nav-login-icon").innerHTML = "登出";
      }
    } else {
      alert(xhr.status);
    }
  };

  xhr.open("post", "php/login.php", true);
  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");

  var data_info = `mem_id=${$id("mem-id").value}&mem-psw=${
    $id("mem-psw").value
  }`;

  xhr.send(data_info);
  //..........................................................
}

function init() {
  $id("member-login-button-style").onclick = sendForm;
  $id("nav-login-icon-p").onclick = navLoginIconP;
  $id("nav-login-icon").onclick = navLoginIcon;
  $id("psw-back").onclick = pswBack;
  $id("register").onclick = register;
  $id("register-account-close-button").onclick = registerAccountCoseButton;
  $id("member-login-close-button").onclick = memberLoginCloseButton;
  $id("retrieve-password-close-button").onclick = retrievePasswordCloseButton;
}

window.addEventListener("load", init, false);
