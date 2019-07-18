// window.addEventListener("load", () => {  
    var yy = new Date().getFullYear(); 
    var mm = new Date().getMonth(); 
    var dd = new Date().getDate();
    var arrmm = new Array();
    var datevalue = "";
    var datevalueTemp = "";
    arrmm[0] = "1";
    arrmm[1] = "2";
    arrmm[2] = "3";
    arrmm[3] = "4";
    arrmm[4] = "5";
    arrmm[5] = "6";
    arrmm[6] = "7";
    arrmm[7] = "8";
    arrmm[8] = "9";
    arrmm[9] = "10";
    arrmm[10] = "11";
    arrmm[11] = "12";
    document.querySelector("#mm-sp").innerText = arrmm[mm];
    document.querySelector("#yy-sp").innerText = yy;
    var dayall = new Date(yy, mm + 1, 0).getDate();
    var bd = new Date(yy + "/" + (mm + 1) + "/1").getDay();
    var dayfunction = () => {
        for (var i = 1; i < 7; i++) {
            var text = "";
            if (i == 1) {
                if (i - bd < 1) {
                    for (var p = 0; p < bd; p++) {
                        text += "<td class='tdclass-1'></td>";
                    }
                }
                for (var o = 1; o <= 7 - bd; o++) {
                    text += "<td><div class='tdclass'>" + o + "</div></td>";
                }
            }
            else if (i == 2) {
                for (var o = 8 - bd; o <= 14 - bd; o++) {
                    text += "<td><div class='tdclass'>" + o + "</div></td>";
                }
            }
            else if (i == 3) {
                for (var o = 15 - bd; o <= 21 - bd; o++) {
                    text += "<td><div class='tdclass'>" + o + "</div></td>";
                }
            }
            else if (i == 4) {
                for (var o = 22 - bd; o <= 28 - bd; o++) {
                    text += "<td><div class='tdclass'>" + o + "</div></td>";
                }
            }
            else if (i == 5) {
                if (bd > 4 && dayall > 28) {
                    for (var o = 29 - bd; o <= 35 - bd; o++) {
                        text += "<td><div class='tdclass'>" + o + "</div></td>";
                    }
                    var tr = document.createElement("tr");
                    document.querySelector("#calendar-tb").appendChild(tr).innerHTML = text;
                    text = "";
                    for (var o = 36 - bd; o <= dayall; o++) {
                        text += "<td><div class='tdclass'>" + o + "</div></td>";
                    }
                } else {
                    for (var o = 29 - bd; o <= dayall; o++) {
                        text += "<td><div class='tdclass'>" + o + "</div></td>";
                    }

                }

            }

            var tr = document.createElement("tr");
            document.querySelector("#calendar-tb").appendChild(tr).innerHTML = text;
        }
    }
    dayfunction();
    document.querySelector("#left-1").addEventListener("click", (e) => {
        var num = arrmm.indexOf(document.querySelector("#mm-sp").innerText);
        dayall = new Date(yy, num, 0).getDate();
        document.querySelector("#calendar-tb").innerHTML = "";
        if (num - 1 < 0) {
            num = 12;
            yy--;
        }
        bd = new Date(yy + "/" + num + "/1").getDay();
        dayfunction(bd, dayall);
        // console.log(arrmm.indexOf( document.querySelector("#mm-sp").innerText));
        document.querySelector("#mm-sp").innerText = arrmm[num - 1];
        document.querySelector("#yy-sp").innerText = yy;
        load();
    })
    document.querySelector("#right-1").addEventListener("click", (e) => {
        var num = arrmm.indexOf(document.querySelector("#mm-sp").innerText);
        if (num == 0) {
            dayall = new Date(yy, 2, 0).getDate()
            bd = new Date(yy + "/" + 2 + "/1").getDay();
        } else if (num == 11) {
            dayall = new Date(yy, num + 1, 0).getDate();
            bd = new Date(yy + "/" + (num + 1) + "/1").getDay();
        } else if (num == 10) {
            dayall = new Date(yy, num, 0).getDate();
            bd = new Date(yy + "/" + (num) + "/1").getDay();
        }
        else {
            dayall = new Date(yy, num + 2, 0).getDate();
            bd = new Date(yy + "/" + (num + 2) + "/1").getDay();
        }
        document.querySelector("#calendar-tb").innerHTML = "";
        if (num + 1 > 11) {
            num = -1;
            yy++;
        }
        dayfunction(bd, dayall);
        document.querySelector("#mm-sp").innerText = arrmm[num + 1];
        document.querySelector("#yy-sp").innerText = yy;
        load();
    })

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
    dd = dd;
    }

    if (mm < 10) {
    mm =  mm;
    }

    today =  dd;


    var len;
    var arr = new Array();
    function load() {
        // console.log(datevalue);
        // datevalue = "";
        len = document.getElementsByClassName("tdclass");
        var ss;
        for (var k = 0; k <= len.length - 1; k++) {
            ss = document.getElementsByClassName("tdclass")[k];
            ss.addEventListener("click", tdclass);
            
            var numF = arrmm.indexOf(document.querySelector("#mm-sp").innerText);
            var num = arrmm.indexOf(document.querySelector("#mm-sp").innerText)+1;
            if (document.querySelector("#yy-sp").innerText < yyyy   ) {
                ss.style.color="#ADADAD";
                ss.style.backgroundColor="rgba(173, 173, 173, 0)";
                ss.style.cursor="default";
                // ss.style.cursor = "not-allowed";
                ss.removeEventListener("click", tdclass);
            }

           
            if( num<mm && document.querySelector("#yy-sp").innerText == yyyy ){
                ss.removeEventListener("click", tdclass);
                ss.style.color="#ADADAD";
                ss.style.backgroundColor="rgba(173, 173, 173, 0)";
                ss.style.cursor="default";
           
                // if(ss.innerText ==  today && num == mm && document.querySelector("#yy-sp").innerText == yyyy ){
                //     ss.style.color="#F27F22";
                //     // ss.style.cursor = "not-allowed";
                //     ss.addEventListener("click", tdclass);
                // }
            }
          
            if(ss.innerText<= today &&  num==mm && document.querySelector("#yy-sp").innerText == yyyy){
                ss.style.color="#ADADAD";
                ss.style.backgroundColor="rgba(173, 173, 173, 0)";
                ss.style.cursor="default";
                // ss.style.cursor = "not-allowed";
                ss.removeEventListener("click", tdclass);
            }
            if(ss.innerText == datevalueTemp.split("-")[2] && num == datevalueTemp.split("-")[1] && document.querySelector("#yy-sp").innerText == datevalueTemp.split("-")[0]){
                // ss.style.background = "#2c1608";
                // ss.style.background = "#2c1608";
                ss.style.color = "#F4F4F4";
                // ss.style.boxShadow = "0 0 8px 10px #fff";
            }
            arr[k] = ss;
        }
    }
    function tdclass(e) {
        for(var i = 0 ; i<=len.length-1 ; i++){
            if( arr[i].style.color != "rgb(173, 173, 173)"){
                arr[i].style.color="#000";
                arr[i].style.background="#fff8e4";
                // arr[i].style.boxShadow="0 0 0 0";
            }
        }
        e.target.style.background = "#ffb11b";
        e.target.style.color = "#F4F4F4";
        // e.target.style.boxShadow = "0 0 8px 10px #fff";
        var value = document.querySelector("#mm-sp").innerText;
        var mmtext = Number(arrmm.indexOf(value));
        mmtext += 1;
        datevalueTemp = document.querySelector("#yy-sp").innerText + "-" + mmtext + "-" + e.target.innerText;
        datevalue = document.querySelector("#yy-sp").innerText + "-" + ('00' + mmtext).slice(-2) + "-" + ('00' + e.target.innerText).slice(-2);
       
        // console.log(datevalueTemp);

        // tradeTime = new Date();
        // tradeTime = tradeTime.getFullYear() + '-' +
        // ('00' + (tradeTime.getMonth() + 1)).slice(-2) + '-' +
        // ('00' + tradeTime.getDate()).slice(-2) + ' ' +
        // ('00' + tradeTime.getHours()).slice(-2) + ':' +
        // ('00' + tradeTime.getMinutes()).slice(-2) + ':' +
        // ('00' + tradeTime.getSeconds()).slice(-2);

        
        // document.querySelector("#date-label").innerHTML = datevalue;
        // $('#date-text').removeClass('expanded');
        // document.querySelector("#date").value = datevalue;

 
        // dateInfo = document.getElementById('dateInfo');
        // dateInfo.value = datevalue;
        // // console.log("111",dateInfo.value);
        // if (datevalue != "") {
        //     getDate();
        // }
        // function getDate() {
        //     var xhr = new XMLHttpRequest();
        //     xhr.addEventListener('load', (e) => {
        //         if (xhr.status == 200) {
        //             document.getElementById('mtmtmt').style.display = "none";
        //             document.getElementById('textChange').innerText = "蝭拚�貊�鞉�頣��";
        //             // console.log("�𠯫");
        //             document.getElementById('textChange-hot').style.display = "none";
        //             document.getElementById('mtmtmtS').innerHTML = xhr.responseText;
        //             for (var i = 0; i < document.getElementsByClassName('pro-item-pic').length; i++) {
        //                 document.getElementsByClassName('pro-item-pic')[i].classList.remove('pro-item-pic-hot');//�嚉��厩�梢�璅嗵惜
        //             }
        //         } else {
        //             alert(xhr.status);
        //         }
        //     });
        //     contTypeObj = document.querySelector('input[name="contType"]:checked+label').previousElementSibling;
        //     // console.log("....", contTypeObj.value);
        //     levelTypeObj = document.querySelector('input[name="levelType"]:checked+label').previousElementSibling;
        //     // console.log("------", levelTypeObj.value);
        //     budgetTypeObj = document.querySelector('input[name="budgetType"]:checked+label').previousElementSibling;
        //     // console.log("=====", budgetTypeObj.value); 
        //     //   var url = "getSelected.php?dateInfo="+dateInfo.value;
        //     var url = "productsOverview_getSelected.php?dateInfo=" + dateInfo.value + "&continent=" + contTypeObj.value + "&levelType=" + levelTypeObj.value + "&budgetType=" + budgetTypeObj.value;
        //     xhr.open("Get", url, true);
        //     xhr.send(null);
        // }
    }
    load();
// })