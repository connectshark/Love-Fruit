
window.onload = function () {
    var backNavs = document.getElementsByClassName("back-nav");
    var backHref = location.pathname;
    var navArr = backHref.split("/")
    var bkNav = navArr[navArr.length - 1];

    for (let i = 0; i < backNavs.length; i++) {
        backNavs[i].classList.remove("active");
        if (backNavs[i].getAttribute("href") == bkNav) {
            backNavs[i].classList.add("active");
        }
    }

    var logoutBtn = document.getElementById("log-btn");
    logoutBtn.addEventListener("click", function () {
        let xhr = new XMLHttpRequest();
        xhr.onload = function () {
            if (xhr.status == 200) {
                if (xhr.responseText.indexOf("error") != -1) {
                    alert("系統錯誤");
                } else {
                    window.location.href = "backstage-login.php";
                }
            } else {
                alert(xhr.status);
            }
        }

        xhr.open("post", "backstageLogout.php", true);
        xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        let logout_info = "";
        xhr.send(logout_info);
    }, false);

};
