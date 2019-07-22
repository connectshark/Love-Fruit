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
function registerClear() {
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
  // 註冊會員Msg
  $id("register-erroMsg").innerText = "";
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

// 找回密碼
function RetrievePassword() {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      if (xhr.responseText == "error") {
        $id("member-login-erroMsg").innerText = "查無此人";
        $id("retrieve-mem-id").value = "";
        $id("email-address").value = "";
      } else pq = "您的密碼";
      pa = pq += xhr.responseText;
      $id("member-login-erroMsg").innerText = pa;
      $id("retrieve-mem-id").value = "";
      $id("email-address").value = "";
      $id("login-interface").style.display = "block";
      $id("retrieve-password").style.display = "none";
    } else {
      alert(xhr.responseText);
    }
  };
  xhr.open("post", "php/RetrievePassword.php", true);
  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");

  var data_password = `mem_id=${$id("retrieve-mem-id").value}&email=${
    $id("email-address").value
  }`;

  xhr.send(data_password);
  //......................................
}
// 登出
function showLoginForm() {
  //檢查登入bar面版上 spanLogin 的字是登入或登出
  //如果是登入，就顯示登入用的燈箱(lightBox)
  //如果是登出
  //將登入bar面版上，登入者資料清空r
  //spanLogin的字改成登入
  //將頁面上的使用者資料清掉
  // var islogin = false;
  // if (!(islogin == true) ) {
  //................登出時，除了處理前端頁面，也要回server端清session

  //......................................

  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      islogin = true;
      // 桌機版
      $id("member-login").style.display = "none";
      $id("membe-centre-img-circle").style.display = "none";
      $id("nav-login-icon").style.display = "";
      $id("member-centre-down-menu").style.opacity = "0";
      $id("member-centre-down-menu").style.transform = "translateY(0%)";
      // 手機版
      $id("icon-login-box-mp-img").style.display = "none";
      $id("nav-login-icon-p").style.display = "";
      $id("member-centre-panel-p").style.opacity = "0";
      $id("member-centre-panel-p").style.transform = "translateY(0%)";
      window.location.reload();
    } else {
      alert(xhr.status);
    }
  };
  xhr.open("post", "php/loginOut.php", true);
  xhr.send(null);
  //......................................
} //showLoginForm 打開關掉面板

// 登入
var memIdValu = "";
function sendForm() {
  //=====使用Ajax 回server端,取回登入者姓名, 放到頁面上  送出檢查帳號密碼
  //..........................................................
  var xhr = new XMLHttpRequest();

  xhr.onload = function() {
    if (xhr.status == 200) {
      if (xhr.responseText == "error") {
        $id("member-login-erroMsg").innerText = "帳密錯誤";
        $id("mem-psw").value = "";
      } else {
        // 桌機版
        //登入成功
        // alert("登入成功！");
        // memIdValu = xhr.responseText;
        // echo過來的字串
        console.log(xhr.responseText);
        // mem_id_hide
        //將登入表單上的資料清空，並隱藏燈箱
        window.location.reload();
        $id("member-login").style.display = "none";
        $id("mem-id").value = "";
        $id("mem-pws").value = "";
        $id("nav-login-icon").style.display = "none";
        $id("member-login-erroMsg").innerText = "";
        $id("membe-centre-img-circle").style.display = "inline-block";
        // 手機版
        $id("nav-login-icon-p").style.display = "none";
        $id("icon-login-box-mp-img").style.display = "inline-block";
      }
    } else {
      alert(xhr.status);
    }
  };

  xhr.open("post", "php/login.php", true);
  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");

  var data_info = `mem_id=${$id("mem-id").value}&mem_psw=${
    $id("mem-psw").value
  }`;

  xhr.send(data_info);
  //..........................................................
}

// 檢查帳號

// 檢查姓名
function checkName() {
  let registerAccountMemName = document.getElementById(
    "register-account-mem-name"
  ).value;
  // let regexpcheckName = new RegExp(/^(\w){1,10}$/);
  if (registerAccountMemName.length != 0) {
    checkAccount();
  } else {
    $id("register-erroMsg").innerText = "姓名不能空白";
  }
}

function checkAccount() {
  //=====使用Ajax 回server端,取回登入者姓名, 放到頁面上  送出檢查帳號密碼
  //..........................................................
  var xhr = new XMLHttpRequest();
  var regexpAccount = new RegExp(/^(\w){3,10}$/);
  var registerAccountMemId = document.getElementById("register-account-mem-id")
    .value;

  xhr.onload = function() {
    if (xhr.status == 200) {
      if (xhr.responseText == "error") {
        $id("register-erroMsg").innerText = "帳號重複";
      } else {
        if (regexpAccount.test(registerAccountMemId)) {
          confirmPassword();
        } else {
          $id("register-erroMsg").innerText = "帳號請大於3碼，或是小於10碼!";
        }
      }
    } else {
      alert(xhr.status);
    }
  };

  xhr.open("post", "php/checkAccount.php", true);
  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");

  var checkAccount = `mem_id=${$id("register-account-mem-id").value}`;

  xhr.send(checkAccount);
  //..........................................................
}

// 檢查密碼
function confirmPassword() {
  let regexpPassword = new RegExp(/^(\w){3,10}$/);
  let regexpPasswordAz = new RegExp(/(?=.*[a-zA-Z])/);
  let registerAccountMemId = document.getElementById("register-account-mem-psw")
    .value;
  if (regexpPassword.test(registerAccountMemId)) {
    if (regexpPasswordAz.test(registerAccountMemId)) {
      if (
        $id("register-account-mem-psw").value ===
        $id("register-account-confirm-mem-psw").value
      ) {
        emailCheck();
      } else {
        $id("register-erroMsg").innerText = "密碼不相同";
      }
    } else {
      $id("register-erroMsg").innerText = "密碼必須含有一個大小寫英文字母";
    }
  } else {
    $id("register-erroMsg").innerText = "密碼長度太短";
  }
}

// 檢查信箱
function emailCheck() {
  let registerAccountEmailAddress = document.getElementById(
    "register-account-email-address"
  ).value;
  let regexpemailPat = new RegExp(
    /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/
  );
  if (registerAccountEmailAddress.length != 0) {
    if (regexpemailPat.test(registerAccountEmailAddress)) {
      registeredMember();
    } else {
      $id("register-erroMsg").innerText = "信箱必須包括(@和.)";
    }
  } else {
    $id("register-erroMsg").innerText = "請輸入信箱";
  }
}
// ^\w+：@ 之前必須以一個以上的文字&數字開頭，例如 abc
// ((-\w+)：@ 之前可以出現 1 個以上的文字、數字或「-」的組合，例如 -abc-
// (\.\w+))：@ 之前可以出現 1 個以上的文字、數字或「.」的組合，例如 .abc.
// ((-\w+)|(\.\w+))*：以上兩個規則以 or 的關係出現，並且出現 0 次以上 (所以不能 –. 同時出現)
// @：中間一定要出現一個 @
// [A-Za-z0-9]+：@ 之後出現 1 個以上的大小寫英文及數字的組合
// (\.|-)：@ 之後只能出現「.」或是「-」，但這兩個字元不能連續時出現
// ((\.|-)[A-Za-z0-9]+)*：@ 之後出現 0 個以上的「.」或是「-」配上大小寫英文及數字的組合
// \.[A-Za-z]+$/：@ 之後出現 1 個以上的「.」配上大小寫英文及數字的組合，結尾需為大小寫英文
//註冊
function registeredMember() {
  //=====使用Ajax 回server端,取回登入者姓名, 放到頁面上  送出檢查帳號密碼
  //..........................................................
  var xhr = new XMLHttpRequest();

  xhr.onload = function() {
    if (xhr.status == 200) {
      if (xhr.responseText == "error") {
        alert("輸入錯誤");
      } else {
        alert("註冊成功");
        $id("login-interface").style.display = "block";
        $id("retrieve-password").style.display = "none";
        $id("register-account").style.display = "none";
        registerClear();
      }
    } else {
      alert(xhr.status);
    }
  };

  xhr.open("post", "php/register.php", true);
  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");

  var registeredMember = `mem_name=${
    $id("register-account-mem-name").value
  }&mem_id=${$id("register-account-mem-id").value}&mem_psw=${
    $id("register-account-mem-psw").value
  }&email=${$id("register-account-email-address").value}&mem_pic=${
    $id("register-memberIcon").value
  }`;

  xhr.send(registeredMember);
  //..........................................................
}

function init() {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    // alert(xhr.responseText);
    if (xhr.responseText != "notLogin") {
      $id("nav-login-icon").style.display = "none";
      $id("membe-centre-img-circle").style.display = "inline-block";
      $id("nav-login-icon-p").style.display = "none";
      $id("icon-login-box-mp-img").style.display = "inline-block";
    }
    // 已登入;
  };
  xhr.open("get", "php/UserProfile.php", true);
  xhr.send(null);

  $id("register-account-button-style").onclick = checkName;
  $id("member-login-button-style").onclick = sendForm;
  $id("nav-login-icon-p").onclick = navLoginIconP;
  $id("nav-login-icon").onclick = navLoginIcon;
  $id("psw-back").onclick = pswBack;
  $id("register").onclick = register;
  $id("register-account-close-button").onclick = registerAccountCoseButton;
  $id("member-login-close-button").onclick = memberLoginCloseButton;
  $id("retrieve-password-close-button").onclick = retrievePasswordCloseButton;
  // 會員登入-桌機
  $id("member-login-button-style").onclick = sendForm;
  $id("login-out").onclick = showLoginForm;
  // 會員登入-手機
  $id("login-out-p").onclick = showLoginForm;
  // 取回密碼
  $id("login-retrieve-password-button").onclick = RetrievePassword;
}

document.getElementById("mem-psw").onkeyup = function(e) {
  if (e.keyCode != 13) {
    return;
  }
  sendForm(); //這要改成你的 function 名!!
  // e.preventDefault();
  // this.value = ""; // 按下Enter以後會清空輸入框內的值
};
document.getElementById("email-address").onkeyup = function(e) {
  if (e.keyCode != 13) {
    return;
  }
  RetrievePassword();
};

window.addEventListener("load", init, false);
