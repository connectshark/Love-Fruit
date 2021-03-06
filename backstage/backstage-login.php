<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="菓籽戀冰所" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>菓籽戀冰所</title>
    <link rel="icon" href="../img/navBar/logo.png" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/backstage.css">
</head>

<body class="page-backstage">


    <section class="container-fluid" style="padding-top:200px;">
        <div class="row justify-content-center">
            <div class="col-3 bg-lovefruit rounded p-4">
                <form>
                    <div class="form-group row justify-content-center">
                        <h1 class="text-white col-12 text-center">菓籽戀冰所</h1>
                        <p class="text-white">後台登入</p>
                    </div>

                    <div class="form-group row">
                        <label for="empid" class="col-2 col-form-label text-white p-1 text-center">帳號</label>
                        <div class="col-10">
                            <input type="text" id="empid" class="form-control" name="emp_id" placeholder="帳號">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-2 col-form-label text-white p-1 text-center">密碼</label>
                        <div class="col-10">
                            <input type="password" class="form-control" id="password" name="emp_psw" placeholder="密碼">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center pt-2">
                        <input class="btn btn-info col-4" id="login-btn" type="button" value="登入">
                    </div>
                </form>

            </div>
        </div>
    </section>


    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
        window.onload = function() {
            var logBtn = document.getElementById("login-btn");
            logBtn.onclick = function() {
                let xhr = new XMLHttpRequest();

                xhr.onload = function(){
                    var empName = document.getElementById("emp-name");
                    if(xhr.readyState == 4){
                        if(xhr.status == 200){
                                if ( xhr.responseText.indexOf("error") != -1 ){
                                    alert("查無此員工");
                                }else{
                                    window.location.href="backstage-cto.php";
                                }
                        }else{
                            alert(xhr.status);
                        }
                    
                    }

                }

                xhr.open("post", "backstageLogin.php", true);
                xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                let login_info = `emp_psw=${document.getElementById("password").value}&emp_id=${document.getElementById("empid").value}`;
                xhr.send(login_info);     
            }
        }
    </script>


</body>

</html>