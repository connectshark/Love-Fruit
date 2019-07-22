<?php 
$errMsg="";
try {
	require_once("mac-require.php");
	$sql = "select m.mem_no,m.mem_name,m.mem_pic, cm.msg_title, cm.msg_date, cm.course_class_no,cm.msg_content from course_msg cm join member m on cm.mem_no = m.mem_no WHERE course_class_no = 0 ORDER BY cm.msg_date desc";
    $courseMsg = $pdo->prepare($sql);
	$courseMsg -> execute();
} catch (PDOException $e) {
	$errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
    $errMsg .= "行數:". $e->getLine()."<br>";
    echo $errMsg;
}
?>
<html lang="UTF-8">
  <head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="菓籽戀冰所" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>菓籽戀冰所</title>
    <link rel="icon" href="img/navBar/logo.png" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/courseP.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="css/temporary-cart.css">
 
</head>   
  <body>
  <?php
    require_once("nav.php");
    ?>

    <section class="general-wrap">
            <div class="wrapper">
                
                    <img class="cloud " src="img/cloud.png" alt="雲" />
                    <img class="cloud " src="img/course/styleCloud.png" alt="雲" />
                    <img class="cloud " src="img/cloud.png" alt="雲" />
                    <img class="cloud " src="img/course/styleCloud.png" alt="雲" />
                    <img class="cloud " src="img/cloud.png" alt="雲" />
                  
                <div class="general-ribbon">
                    <h2 class="title"> 一般課程</h2>
                    <span class="subtitle">每日固定開課</span>
                </div>
                <section class="kanban-group">
                    <div class="kanban col-md-6">
                            <div class="item">
                                <div class="gift"> <img src="img/course/gift-pink.png" alt="禮物粉帶"> <span class="subtitle">戀愛小馬夢幻冰品</span></div>
                                <div class="content-box">
                                    <div class="diy-img">
                                        <img src="img/course/diyImg 1.png" alt="戀愛小馬夢幻冰品">
                                    </div>
                                  <div class="info-title">
                                        <h4>課程資訊</h4>
                                    </div>
                                    <div class="info-dec">
                                        <ul>
                                            <li>場次時間：</li>
                                            <p> 上午10:00、下午 1:00、下午 3:00(實際開課時間，以當日現場為主)</p>
            
                                            <li>創作時間：</li>
                                            <p> 100分鐘</p>
            
                                            <li>手做地點：</li>
                                            <p> 2F DIY教室Ａ</p>
            
                                            <li>收費方式：</li>
                                            <p> 每份$500元(歡迎使用門票上之抵用券)</p>
            
                                            <li>報名方式：</li>
                                            <p> 1.線上預約(須提前30分鐘至1F客服中心報到，逾時將留給現場後位)<br>2.入館後至1F客服中心使用QR
                                                Code報到劃位</p>
                                        </ul>
                                    </div>
                                    <div class="course-btn">
                                        <a class="course-ice-btn-out" href="course-general-form.php">
                                            <span class="course-ice-btn-in">
                                                <img src="img/btn/ICE.png" alt="btn">
                                                我要預約
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="kanban col-md-6 ">
                        <div class="item">
                            <div class="gift"> <img src="img/course/gift-pink.png" alt="禮物粉帶"> <span class="subtitle">情人繽紛彩繪冰棒</span></div>
                            <div class="content-box">
                                <div class="diy-img">
                                    <img src="img/course/diyImg2.png" alt="情人繽紛彩繪冰棒">
                                </div>
                                <div class="info-title">
                                    <h4>課程資訊</h4>
                                </div>
                                <div class="info-dec">
                                    <ul>
                                        <li>場次時間：</li>
                                        <p> 上午10:00、下午 1:00、下午 3:00(實際開課時間，以當日現場為主)</p>
        
                                        <li>創作時間：</li>
                                        <p> 80分鐘</p>
        
                                        <li>手做地點：</li>
                                        <p> 2F DIY教室B</p>
        
                                        <li>收費方式：</li>
                                        <p> 每份$350元(歡迎使用門票上之抵用券)</p>
        
                                        <li>報名方式：</li>
                                        <p> 1.線上預約(須提前30分鐘至1F客服中心報到，逾時將留給現場後位)<br>2.入館後至1F客服中心使用QR
                                            Code報到劃位</p>
                                    </ul>
                                </div>
                                <div class="course-btn">
                                    <a class="course-ice-btn-out" href="course-general-form.php">
                                        <span class="course-ice-btn-in">
                                            <img src="img/btn/ICE.png" alt="btn">
                                            我要預約
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                   </div>
                </section>
                
            </div>
    </section>
    
    <section class="general-message-wrap">
        <div class="message-cloud"></div>
    
        <div class="title-box">
            <h3  class="message-title">課程留言板</h3>
            <span>寫下你對課程的想法！</span>
        </div>
      
    <form class="leave-message-wrap" action="course-msg.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="0" name="courseClassNo">
        <input type="hidden"   name="msgTitle">
            <div class="message-mem col-md-2">
                <i class="fas fa-user-circle"></i>
                <p>會員</p>
                <p><?php echo date("Y-m-d"); ?></p>
            </div>
            <div class="balloons col-md-10">
           <label><textarea name="msgContent" id="general-msg" maxlength="100" minlength="1" cols="90" rows="8" placeholder="寫下你對課程的想法......" wrap="hard" ></textarea></label> 
            </div>
            <div class="message-btn col-md-12">
                <a href="course-msg.php">
                <button  type="submit" class="message-btn-out">
                    <span class="message-btn-in">
                        我要留言
                    </span>
                </button></a>
            </div>
    </form>
       

        <div class="mem-message-wrap">
        <?php while ($row = $courseMsg -> fetchObject()) {?>
            <div class="mem-message-item">
           
                <div class="message-mem col-md-2 col-2">
                    <i class="fas fa-user-circle"></i> 
                </div>
                <div class="message-con col-md-10 col-9">
                    <div class="mem-ifo">
                        <p class=mem-name><?php echo $row->mem_name; ?></p>
                        <p class="time"><?php echo $row->msg_date; ?></p>
                    </div>
                    <div class="mem-con">
                        <p>
                        <?php echo $row->msg_content; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>    
      

            <!-- <div class="more-btn col-md-12"  style="background-color:none;color:none;border:none;">
                <button  class="more-btn-out">
                    <span class="more-btn-in">
                        查看更多
                    </span>
                </button >
            </div> -->
        </div>

    </section>



    <footer>
      <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
    </footer>
  
    <script src="js/nav.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/shop.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
