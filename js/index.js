window.addEventListener("load", function() {
  var menuControl = document.getElementById("menu-control");
  var navItem = document.getElementsByClassName("nav_item")[1];
  menuControl.addEventListener("click", function() {
    navItem.classList.toggle("nav_item_show");
  });
});
