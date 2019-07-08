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

function init() {
  $id("model-general-button").addEventListener("click", modelchange1, false);
  $id("model-bear-paw-button").addEventListener("click", modelchange2, false);
  $id("model-rabbit-button").addEventListener("click", modelchange3, false);
  $id("model-rocket-button").addEventListener("click", modelchange4, false);
}
window.addEventListener("load", init, false);

window.addEventListener("scroll", function() {
  let scrolltop =
    document.documentElement.scrollTop ||
    window.pageYOffset ||
    document.body.scrolltop;

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
});

window.addEventListener("scroll", function() {
  let scrolltop =
    document.documentElement.scrollTop ||
    window.pageYOffset ||
    document.body.scrolltop;

  if (scrolltop > 4500) {
    document
      .querySelector(".course-blue-ship")
      .classList.add("course-blue-ship-show");
  }
});
