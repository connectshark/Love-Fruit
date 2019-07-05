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
    $id("nav-drop-down-menu").style.top = "7%";
  }
}
function navDropDownMenuout() {
  if (window.innerWidth > 767) {
    $id("nav-drop-down-menu").style.opacity = "0";
    $id("nav-drop-down-menu").style.top = "-60%";
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
