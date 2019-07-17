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

function init() {
  $id("nav-login-icon-p").onclick = navLoginIconP;
  $id("nav-login-icon").onclick = navLoginIcon;
  $id("psw-back").onclick = pswBack;
  $id("register").onclick = register;
  $id("register-account-close-button").onclick = registerAccountCoseButton;
  $id("member-login-close-button").onclick = memberLoginCloseButton;
  $id("retrieve-password-close-button").onclick = retrievePasswordCloseButton;
}

window.addEventListener("load", init, false);
