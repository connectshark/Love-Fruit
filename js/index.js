function $id(id) {
  return document.getElementById(id);
}
function modelchange1() {
  $id("model-general").style.visibility = "visible";
  $id("model-bear").style.visibility = "hidden";
  $id("model-rabbit").style.visibility = "hidden";
  $id("model-rocket").style.visibility = "hidden";
}
function modelchange2() {
  $id("model-general").style.visibility = "hidden";
  $id("model-bear").style.visibility = "visible";
  $id("model-rabbit").style.visibility = "hidden";
  $id("model-rocket").style.visibility = "hidden";
}
function modelchange3() {
  $id("model-general").style.visibility = "hidden";
  $id("model-bear").style.visibility = "hidden";
  $id("model-rabbit").style.visibility = "visible";
  $id("model-rocket").style.visibility = "hidden";
}
function modelchange4() {
  $id("model-general").style.visibility = "hidden";
  $id("model-bear").style.visibility = "hidden";
  $id("model-rabbit").style.visibility = "hidden";
  $id("model-rocket").style.visibility = "visible";
}
function getStyle(oDiv, name) {
  if (oDiv.style.styleFloat) {
    return oDiv.style.styleFloat; //ie下float处理
  } else if (oDiv.style.cssFloat) {
    return oDiv.style.cssFloat; //火狐等float处理
  }
  if (oDiv.currentStyle) {
    return oDiv.currentStyle[name];
  } else {
    return getComputedStyle(oDiv, false)[name];
  }
}
// 飛船
function blueShipButton() {
  $id("course-blue-ship").classList.remove("course-blue-ship-show");
  $id("course-blue-ship").classList.add("course-blue-ship-show-out");
  $id("course-pink-ship").classList.remove("course-blue-ship-show-out");
  $id("course-pink-ship").classList.add("course-blue-ship-show");
  // 按鈕
  $id("blue-ship-button").style.display = "none";
  $id("pink-ship-button").style.display = "inline-block";
}

function pinkShipButton() {
  $id("course-pink-ship").classList.remove("course-blue-ship-show");
  $id("course-pink-ship").classList.add("course-blue-ship-show-out");
  $id("course-blue-ship").classList.remove("course-blue-ship-show-out");
  $id("course-blue-ship").classList.add("course-blue-ship-show");
  // 按鈕
  $id("blue-ship-button").style.display = "inline-block";
  $id("blue-ship-button").style.display = "inline-block";
  $id("blue-ship-button").style.display = "inline-block";
  $id("pink-ship-button").style.display = "none";
}
//
function init() {
  // 飛船
  $id("blue-ship-button").addEventListener("click", blueShipButton, false);
  $id("pink-ship-button").addEventListener("click", pinkShipButton, false);
  // 模型
  $id("model-general-button").addEventListener("click", modelchange1, false);
  $id("model-bear-paw-button").addEventListener("click", modelchange2, false);
  $id("model-rabbit-button").addEventListener("click", modelchange3, false);
  $id("model-rocket-button").addEventListener("click", modelchange4, false);
}

window.addEventListener("load", init, false);

// 信件桌機js
window.addEventListener("scroll", function() {
  let scrolltop =
    document.documentElement.scrollTop ||
    window.pageYOffset ||
    document.body.scrolltop;
  if (window.innerWidth < 767) {
    if (scrolltop > 220) {
      document
        .querySelector(".mailer-middle")
        .classList.add("mailer-middle-show");
      // document.querySelector("").classList.add("");
    } else {
      document
        .querySelector(".mailer-middle")
        .classList.remove("mailer-middle-show");
      // document.querySelector("").classList.remove("");
    }
  }
});
window.addEventListener("scroll", function() {
  let scrolltop =
    document.documentElement.scrollTop ||
    window.pageYOffset ||
    document.body.scrolltop;
  if (window.innerWidth > 767) {
    if (scrolltop > 400) {
      document
        .querySelector(".mailer-middle")
        .classList.add("mailer-middle-show");
      // document.querySelector("").classList.add("");
    } else {
      document
        .querySelector(".mailer-middle")
        .classList.remove("mailer-middle-show");
      // document.querySelector("").classList.remove("");
    }
  }
});

// 飛船
window.onload = function() {
  ibox();
  abox();
};
function ibox() {
  var i = 0;
  window.addEventListener("scroll", function() {
    let scrolltop =
      document.documentElement.scrollTop ||
      window.pageYOffset ||
      document.body.scrolltop;
    if (window.innerWidth < 768) {
      if (scrolltop > 3000) {
        i += 1;
        if (i == 1) {
          document
            .querySelector(".course-blue-ship")
            .classList.add("course-blue-ship-show");
        }
      }
    } else {
      if (scrolltop > 3200) {
        i += 1;
        if (i == 1) {
          document
            .querySelector(".course-blue-ship")
            .classList.add("course-blue-ship-show");
        }
      }
    }
  });
}
// 判斷秒數何時啟動
// setTimeout(function() {
//   $id("blue-ship-button").style.pointerEvents = "auto";
// }, 5000);

// 問答文字動畫
function abox() {
  var a = 0;
  window.addEventListener("scroll", function() {
    let scrolltop =
      document.documentElement.scrollTop ||
      window.pageYOffset ||
      document.body.scrolltop;
    if (window.innerWidth > 768) {
      if (scrolltop > 400) {
        a += 1;
        if (a == 1) {
          anime
            .timeline({ loop: false })
            .add({
              targets: ".ml9 .letter",
              scale: [0, 1],
              duration: 1500,
              elasticity: 60,
              delay: function(el, i) {
                return 120 * (i + 1);
              }
            })
            .add({
              targets: ".ml9",
              duration: 1000,
              easing: "easeOutExpo",
              delay: 600
            });
        }
      }
    } else {
      if (scrolltop > 200) {
        a += 1;
        if (a == 1) {
          anime
            .timeline({ loop: false })
            .add({
              targets: ".ml9 .letter",
              scale: [0, 1],
              duration: 1500,
              elasticity: 60,
              delay: function(el, i) {
                return 120 * (i + 1);
              }
            })
            .add({
              targets: ".ml9",
              duration: 1000,
              easing: "easeOutExpo",
              delay: 600
            });
        }
      }
    }
  });
}
// Wrap every letter in a span
$(".ml9 .letters").each(function() {
  $(this).html(
    $(this)
      .text()
      .replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>")
  );
});

// 動畫客製化冰棒
TweenMax.fromTo(
  ["#user-ice1", "#user-ice2", "#user-ice3", "#user-ice4"],
  1,
  {
    y: 0,
    repeat: -1,
    yoyo: true
  },
  {
    y: -8,
    ease: Power0.easeNone,
    repeat: -1,
    yoyo: true
  }
);
// 客製商品
TweenMax.fromTo(
  ".model-general",
  1,
  {
    y: 0,
    repeat: -1,
    yoyo: true
  },
  {
    y: -20,
    ease: Power4.easeOut,
    repeat: -1,
    yoyo: true
  }
);
TweenMax.fromTo(
  ".model-bear",
  1,
  {
    y: 0,
    repeat: -1,
    yoyo: true
  },
  {
    y: -20,
    ease: Power4.easeOut,
    repeat: -1,
    yoyo: true
  }
);
TweenMax.fromTo(
  ".model-rabbit",
  1,
  {
    y: 0,
    repeat: -1,
    yoyo: true
  },
  {
    y: -20,
    ease: Power4.easeOut,
    repeat: -1,
    yoyo: true
  }
);
TweenMax.fromTo(
  ".model-rocket",
  1,
  {
    y: 0,
    repeat: -1,
    yoyo: true
  },
  {
    y: -20,
    ease: Power4.easeOut,
    repeat: -1,
    yoyo: true
  }
);
TweenMax.to("#iceShadow", 1, {
  scaleY: 0.9,
  scaleX: 1.3,
  repeat: -1,
  opacity: 0.4,
  yoyo: true,
  ease: Back.easeOut
});
// 商城動畫
TweenMax.fromTo(
  ".store-group",
  1,
  {
    y: 30,
    repeat: -1,
    yoyo: true
  },
  {
    y: 0,
    ease: Power4.easeOut,
    repeat: -1,
    yoyo: true
  }
);
