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
// 飛船
function blueShipButton() {
  // if ($id("course-pink-ship").style.transform == "translateX(0)") {
  $id("course-blue-ship").classList.remove("course-blue-ship-show");
  $id("course-blue-ship").classList.add("course-blue-ship-show-out");
  $id("course-pink-ship").classList.remove("course-blue-ship-show-out");
  $id("course-pink-ship").classList.add("course-blue-ship-show");
  $id("blue-ship-button").style.display = "none";
  $id("pink-ship-button").style.display = "inline-block";
}
// }
function pinkShipButton() {
  // console.log($id("course-pink-ship").style.transform);
  // if ($id("course-pink-ship").style.transform == "translateX(0)") {
  $id("course-pink-ship").classList.remove("course-blue-ship-show");
  $id("course-pink-ship").classList.add("course-blue-ship-show-out");
  $id("course-blue-ship").classList.remove("course-blue-ship-show-out");
  $id("course-blue-ship").classList.add("course-blue-ship-show");

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
};
function ibox() {
  var i = 0;
  window.addEventListener("scroll", function() {
    let scrolltop =
      document.documentElement.scrollTop ||
      window.pageYOffset ||
      document.body.scrolltop;

    if (scrolltop > 3200) {
      i += 1;
      if (i == 1) {
        document
          .querySelector(".course-blue-ship")
          .classList.add("course-blue-ship-show");
      }
    }
  });
}
