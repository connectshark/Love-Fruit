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
// 會員主選單;
function memberCentreDownMenu() {
  if (window.innerWidth > 767) {
    $id("nav-drop-down-menu").style.opacity = "1";
    $id("nav-drop-down-menu").style.transform = "translateY(10%)";
  }
}

function memberCentreDownMenuOut() {
  if (window.innerWidth > 767) {
    if ($id("member-centre-down-menu").style.opacity == "0") {
      $id("member-centre-down-menu").style.opacity = "1";
      $id("member-centre-down-menu").style.transform = "translateY(190%)";
    } else {
      $id("member-centre-down-menu").style.opacity = "0";
      $id("member-centre-down-menu").style.transform = "translateY(0%)";
    }
  }
}
// 會員手機主選單
function memberCentreDownMenuOutP() {
  if (window.innerWidth < 767) {
    if ($id("member-centre-panel-p").style.opacity == "0") {
      $id("member-centre-panel-p").style.opacity = "1";
      $id("member-centre-panel-p").style.transform = "translateY(180%)";
    } else {
      $id("member-centre-panel-p").style.opacity = "0";
      $id("member-centre-panel-p").style.transform = "translateY(0%)";
    }
  }
}

function init() {
  // 會員主選單
  $id("membe-centre-img").addEventListener(
    "click",
    memberCentreDownMenuOut,
    false
  );
  // 會員手機主選單
  $id("icon-login-box-mp-img").addEventListener(
    "click",
    memberCentreDownMenuOutP,
    false
  );

  $id("nav-drop-down-menu-hover").addEventListener(
    "mouseover",
    memberCentreDownMenu,
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
// $(document).ready(function() {
//   $("#robot-submit").click(function() {
//   $message = $("#message").val();
//   $("#robot-conversation-list").append(`<div class="robot-conversation">
//   <p class="robot_text">${$message}</p></div>`).append(`<div class="robot-conversation">
//   <p class="robot_text"><span>小達人:</span>${$message}</p>
// </div>`);
//     $("#message").val("");

//     $scrollHeight = $("#robot-conversation-list").height(); //scroll的高度
//     $("#robot-conversation-block").animate({ scrollTop: $scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
//   });
// });

// $(document).ready(function() {
//   $("#message").keydown(function(e) {
//     if (e.keyCode != 13) {
//       return;
//     }
// 清除enter的預設行為 自動換行
// e.preventDefault();
//   $message = $("#message").val();
//   $("#robot-conversation-list").append(`<div class="robot-conversation">
//   <p class="robot_text-user">${$message}</p></div>`).append(`<div class="robot-conversation">
//   <p class="robot_text"><span>小達人:</span>${$message}</p>
// </div>`);
//     $("#message").val("");

// $scrollHeight = $("#robot-conversation-list").height(); //scroll的高度
// $("#robot-conversation-block").animate({ scrollTop: $scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
//   });
// });

// 使用者回話;
// 固定回話;
// $(document).ready(function() {
//   $(".fruit").click(function() {
//   $fruit = $(this).text();
//   $("#robot-conversation-list").append(`<div class="robot-conversation">
//   <p class="robot_text-user">${$message}</p></div>`).append(`<div class="robot-conversation">
//   <p class="robot_text">小達人:<span class="robot-A" ></span></p>
// </div>`);

// robot();

// $scrollHeight = $("#robot-conversation-list").height(); //scroll的高度
// $("#robot-conversation-block").animate({ scrollTop: $scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
// robot();
//   });
// });

// Robot!Robot!Robot!Robot!Robot!Robot!Robot!Robot!
// Ajax Robot!
// Ajax Robot!
function setRobotAns_A() {
  // function A 主要針對 User 對輸入框的功能
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      //modify here
      // $message = $("#message").val();
      let result = JSON.parse(xhr.responseText);
      console.log(xhr.responseText); //偵測php回傳DB訊息 - console裡顯示訊息
      console.log(result); //偵測php回傳DB訊息 - console裡顯示訊息
      if (result.answer) {
        // 將questionReply 換成 robot 要官方回覆給 User 看的 DB 欄位名
        //...................
        let QA = document.getElementById("robot-conversation-block");
        let QA_item = document.querySelector(".robot-conversation-list");
        let newQA_item = QA_item.cloneNode(true);
        // cloneNode節點物件的拷貝。
        newQA_item.style.display = "";
        QA.appendChild(newQA_item);
        newQA_item.getElementsByTagName(
          "span"
        )[0].innerText = document.getElementById("message").value; // DB內 User 詢問欄位
        newQA_item.getElementsByTagName("span")[1].innerHTML = result.answer; // DB內 Robot 回覆欄位

        $scrollHeight = $(".robot-conversation-user").height(); //scroll的高度
        console.log($scrollHeight);
        $("#robot-conversation-block").animate(
          { scrollTop: $scrollHeight },
          200
        ); //控制scroll bar的位置 並加一點動畫效果
        //.....................
      } else {
        let QA = document.getElementById("robot-conversation-block");
        let QA_item = document.querySelector(".robot-conversation-list");
        let newQA_item = QA_item.cloneNode(true);
        newQA_item.style.display = "";
        QA.appendChild(newQA_item);
        // console.log(msg);
        // console.log()
        newQA_item.getElementsByTagName(
          "span"
        )[0].innerText = document.getElementById("message").value; // DB內 User 詢問欄位
        newQA_item.getElementsByTagName("span")[1].innerText = "無法回答"; // DB內 Robot 回覆欄位
        // document.getElementById("message").value="";
      }
      document.getElementById("message").value = "";
    } else {
      alert(xhr.status); // 再抓不到 DB 就會顯示當前狀態
    }
  };
  // option link code

  // 因為要抓取 User 的任何問題, 所以要針對輸入框 input 內的 type=text & 輸入框id + 加上 輸入框的值.
  // 記得將php改成自己的路徑和檔案 !!!
  url =
    "php/robot.php?type=text&message=" +
    document.getElementById("message").value;
  xhr.open("get", url, true);

  console.log(url); // 偵測有無正確抓取 url 的值
  // setInfo
  xhr.send(null); //照抄
}

function setRobotAns_B(e) {
  // function B 主要針對 User 點按 button

  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      //modify here
      let result = JSON.parse(xhr.response);
      if (result.answer) {
        //...................
        let QA = document.getElementById("robot-conversation-block");
        let QA_item = document.querySelector(".robot-conversation-list");
        let newQA_item = QA_item.cloneNode(true);
        newQA_item.style.display = "";
        QA.appendChild(newQA_item);
        newQA_item.getElementsByTagName("span")[0].innerText = result.keyword; // DB內 User 詢問欄位
        newQA_item.getElementsByTagName("span")[1].innerHTML = result.answer; // DB內 Robot 回覆欄位

        $scrollHeight = $("#robot-conversation-block").height(); //scroll的高度
        console.log($scrollHeight);
        $("#robot-conversation-block").animate(
          { scrollTop: $scrollHeight },
          200
        ); //控制scroll bar的位置 並加一點動畫效果
        //.....................
      } else {
        alert("目前無法回答您的問題, 請洽詢專線3345678");
      }
    } else {
      alert(xhr.status);
    }
  };
  // option link code

  // 這是抓取 function 內 e.目標.值
  url = "php/robot.php?type=tag&keyword=" + e.target.value;
  console.log(url);
  xhr.open("get", url, true);

  // setInfo
  xhr.send(null);
}

window.addEventListener("load", function() {
  // 要啟動功能

  // 給予我的 "送出" 有功能, 再點按後啟動 function A
  document.getElementById("robot-submit").onclick = function(e) {
    setRobotAns_A(); //這要改成你的 function 名!!
    // message.value = ""; // 按下Enter以後會清空輸入框內的值
    // console.log(this);
  };

  // 給予我鍵盤上的 "Enter" 有功能, 再點按後啟動 function A
  document.getElementById("message").onkeyup = function(e) {
    if (e.keyCode != 13) {
      return;
    }
    setRobotAns_A(); //這要改成你的 function 名!!
    // e.preventDefault();
    // this.value = ""; // 按下Enter以後會清空輸入框內的值
  };
  // //button 迴圈
  let questionTags = document.getElementsByClassName("fruit");
  for (let i = 0; i < questionTags.length; i++) {
    questionTags[i].onclick = setRobotAns_B; // //這要改成你的 function 名!!
  }
});
