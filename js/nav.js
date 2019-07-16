window.addEventListener("load", function() {
  var menuControl = document.getElementById("menu-control");
  var navItem = document.getElementsByClassName("nav-item")[0];
  menuControl.addEventListener("click", function() {
    navItem.classList.toggle("nav-item-show");
  });
});

function $id(id) {
  return document.getElementById(id);
}

function navDropDownMenu() {
  if (window.innerWidth > 767) {
    $id("nav-drop-down-menu").style.opacity = "1";
    $id("nav-drop-down-menu").style.transform = "translateY(10%)";
  }
}
function navDropDownMenuout() {
  if (window.innerWidth > 767) {
    $id("nav-drop-down-menu").style.opacity = "0";
    $id("nav-drop-down-menu").style.transform = "translateY(-90%)";
  }
}

function init() {
  $id("nav-drop-down-menu-hover").addEventListener(
    "mouseover",
    navDropDownMenu,
    false
  );
  $id("nav-drop-down-menu-hover").addEventListener(
    "mouseout",
    navDropDownMenuout,
    false
  );
}
window.addEventListener("load", init, false);

window.addEventListener("load", function() {
  // 會員登入
  var memberLogin = document.getElementById("member-login");
  var navLoginIcon = document.getElementById("nav-login-icon");
  let memberLoginCloseButton = document.getElementById(
    "member-login-close-button"
  );
  let registerAccount = document.getElementById("register-account");
  let loginInterface = document.getElementById("login-interface");
  let retrievePassword = document.getElementById("retrieve-password");

  let navLoginIconP = document.getElementById("nav-login-icon-p");

  let register = document.getElementById("register");
  let pswBack = document.getElementById("psw-back");
  // 開關按鈕
  let registerAccountCoseButton = document.getElementById(
    "register-account-close-button"
  );
  let retrievePasswordCloseButton = document.getElementById(
    "retrieve-password-close-button"
  );
  // 清空input裡面的值
  // 會員登入
  let memId = document.getElementById("mem-id");
  let memPsw = document.getElementById("mem-psw");
  // 忘記密碼
  let retrieveMemId = document.getElementById("retrieve-mem-id");
  let emailAddress = document.getElementById("email-address");
  // 會員註冊
  let registerAccountMemName = document.getElementById(
    "register-account-memName"
  );
  let registerAccountMemId = document.getElementById("register-account-mem-id");
  let registerAccountMemPsw = document.getElementById(
    "register-account-mem-psw"
  );
  let registerAccountConfirmMemPsw = document.getElementById(
    "register-account-confirm-mem-psw"
  );
  let registerAccountEmailAddress = document.getElementById(
    "register-account-email-address"
  );

  // 手機會員登入文字按鈕
  navLoginIconP.addEventListener("click", function() {
    memberLogin.style.display = "inline-block";
  });
  // 會員登入文字按鈕
  navLoginIcon.addEventListener("click", function() {
    memberLogin.style.display = "inline-block";
  });
  // 取回密碼－面板關掉
  pswBack.addEventListener("click", function() {
    loginInterface.style.display = "none";
    retrievePassword.style.display = "block";
  });
  // 註冊會員－面板關掉
  register.addEventListener("click", function() {
    loginInterface.style.display = "none";
    retrievePassword.style.display = "none";
    registerAccount.style.display = "block";
  });
  // 註冊會員-面板關掉
  registerAccountCoseButton.addEventListener("click", function() {
    loginInterface.style.display = "block";
    registerAccount.style.display = "none";
    memberLogin.style.display = "none";
    //註冊會員-清空值
    registerAccountMemName.value = "";
    registerAccountMemId.value = "";
    registerAccountMemPsw.value = "";
    registerAccountConfirmMemPsw.value = "";
    registerAccountEmailAddress.value = "";
    //會員登入-清空值
    memId.value = "";
    memPsw.value = "";
    //取回密碼-清空值
    retrieveMemId.value = "";
    emailAddress.value = "";
  });
  //登入－面板關掉
  memberLoginCloseButton.addEventListener("click", function() {
    memberLogin.style.display = "none";
    memId.value = "";
    memPsw.value = "";
    retrieveMemId.value = "";
    emailAddress.value = "";
  });
  //取回密碼－面板關掉
  retrievePasswordCloseButton.addEventListener("click", function() {
    memberLogin.style.display = "none";
    loginInterface.style.display = "block";
    retrievePassword.style.display = "none";
    //會員登入-清空值
    memId.value = "";
    memPsw.value = "";
    //取回密碼-清空值
    retrieveMemId.value = "";
    emailAddress.value = "";
  });
  // 會員登入結束
  // 機器人
  var robotcontainer = document.getElementById("robot-container");
  var robottitleiconimg = document.getElementById("robot-title-icon-img");
  var robotTitleBlock = document.getElementById("robot-title-block");

  robotTitleBlock.addEventListener("click", function() {
    // if (robotcontainer.style.bottom == "-47%") {
    //   robotcontainer.style.bottom = "0%";
    // } else {
    //   robotcontainer.style.bottom = "-47%";
    // }
    // js抓值得時候不會看css，而是看ＨＴＭＬ
    // 當他沒有收尋到值的時候會在html新增值上去

    // 0=沒有值 底下是當他沒有值的時候 就是true
    if (robotcontainer.style.bottom != "0%") {
      robotcontainer.style.bottom = "0%";
      robottitleiconimg.style.transform = "rotate(180deg)";
    } else {
      robotcontainer.style.bottom = "-445px";
      robottitleiconimg.style.transform = "rotate(-0deg)";
    }
  });
});
// 使用者回話
$(document).ready(function() {
  $("#robot-submit").click(function() {
    $message = $("#message").val();
    $("#robot-conversation-list").append(`<div class="robot-conversation">
    <p class="robot_text">${$message}</p></div>`).append(`<div class="robot-conversation">
    <p class="robot_text"><span>小達人:</span>${$message}</p>
  </div>`);
    $("#message").val("");

    $scrollHeight = $("#robot-conversation-list").height(); //scroll的高度
    $("#robot-conversation-block").animate({ scrollTop: $scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
  });
});

$(document).ready(function() {
  $("#message").keydown(function(e) {
    if (e.keyCode != 13) {
      return;
    }
    // 清除enter的預設行為 自動換行
    e.preventDefault();
    $message = $("#message").val();
    $("#robot-conversation-list").append(`<div class="robot-conversation">
    <p class="robot_text">${$message}</p></div>`).append(`<div class="robot-conversation">
    <p class="robot_text"><span>小達人:</span>${$message}</p>
  </div>`);
    $("#message").val("");

    $scrollHeight = $("#robot-conversation-list").height(); //scroll的高度
    $("#robot-conversation-block").animate({ scrollTop: $scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
  });
});
// 使用者回話
// 固定回話
$(document).ready(function() {
  $(".fruit").click(function() {
    $fruit = $(this).text();
    $("#robot-conversation-list").append(`<div class="robot-conversation">
    <p class="robot_text">${$fruit}</p></div>`).append(`<div class="robot-conversation">
    <p class="robot_text">小達人:<span class="robot-A" ></span></p>
  </div>`);

    robot();

    $scrollHeight = $("#robot-conversation-list").height(); //scroll的高度
    $("#robot-conversation-block").animate({ scrollTop: $scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
    robot();
  });
});
function robot() {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      //modify here
      console.log(`wow`);
      $(".robot-A").html(xhr.responseText);
    } else {
      alert(xhr.status);
    }
  };
  // option link code
  var url = "php/index.php?keyword=" + $fruit;
  xhr.open("get", url, true);
  // xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

  // setInfo
  // var date_info = `memId=1`;
  xhr.send(null);
}
