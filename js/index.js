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
  $id("model-bear").style.visibility = "visible";
  $id("model-rabbit").style.display = "inline-block";
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
