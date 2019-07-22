
window.onload = function () {
    var backNavs = document.getElementsByClassName("back-nav");
    var backHref = location.pathname;
    var navArr = backHref.split("/")
    var bkNav = navArr[1];

    for (let i = 0; i < backNavs.length; i++) {
        backNavs[i].classList.remove("active");
        if (backNavs[i].getAttribute("href") == bkNav) {
            backNavs[i].classList.add("active");
        }
    }
    
    
};
