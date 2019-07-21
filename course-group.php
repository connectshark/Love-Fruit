<?php 
try {
  require_once("mac-require.php");
  //抓開團留言
	$sql = "SELECT m.mem_no,m.mem_name,m.mem_pic,cm.msg_no, cm.msg_title, cm.msg_date, cm.course_class_no,cm.msg_content FROM course_msg cm JOIN member m ON cm.mem_no = m.mem_no WHERE course_class_no = 1 ORDER BY cm.msg_date desc";
  $memNo = 1;//之後改為session
  $courseMsg  = $pdo->prepare($sql);
  $courseMsg -> bindValue(':memNo',$memNo);
  $courseMsg -> execute();
  //.............
  $sql2 = "SELECT cm.msg_no,m.mem_no,m.mem_name,m.mem_pic, cm.course_class_no,mr.reply_date,mr.reply_content FROM msg_reply mr JOIN member m ON mr.mem_no = m.mem_no JOIN course_msg cm ON mr.msg_no = cm.msg_no WHERE course_class_no = 1 and cm.msg_no = :msg_no ORDER BY reply_date desc";      
  //???   $memNo = 1;//之後改為session
  $replayMsg  = $pdo->prepare($sql2);
  
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>菓籽戀冰所</title>
  <link rel="icon" href="img/navBar/logo.png" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/courseP.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
  <link rel="stylesheet" href="css/temporary-cart.css">
</head>

<body>

  <?php
    require_once("nav.php");
  ?>

  <section class="group-wrap">
    <div class="wrapper">
  
        <img class="cloud " src="img/cloud.png" alt="雲" />
        <img class="cloud " src="img/course/styleCloud.png" alt="雲" />
        <img class="cloud " src="img/cloud.png" alt="雲" />
        <img class="cloud " src="img/course/styleCloud.png" alt="雲" />
        <img class="cloud " src="img/cloud.png" alt="雲" />

      <div class="group-ribbon">
        <h2 class="title"> 揪團課程</h2>
        <span class="subtitle">不定時開課</span>


      </div>
      <div class="kanban">
        <div class="item">
          <div class="gift"> <img src="img/course/gift-yellow.png" alt="禮物黃帶"> <span class="subtitle">你儂我儂甜心冰淇淋蛋糕
            </span></div>
          <div class="content-box">
            <div class="diy-img col-md-6">
              <img src="img/course/diyimg3.png" alt="你儂我儂甜心冰淇淋蛋糕">
            </div>
            <div class="info  col-md-6">
              <div class="info-title">
                <h4>課程資訊</h4>
              </div>
              <div class="info-dec">
                <ul>
                  <li>創作時間：</li>
                  <p> 180分鐘</p>

                  <li>手做地點：</li>
                  <p> 2F DIY教室C </p>

                  <li>收費方式：</li>
                  <p> 每份$1,000元(雙人課程，歡迎使用門票上之抵用券)</p>

                  <li>報名方式：</li>
                  <p> 1.線上揪團：由揪團主發起課程，並於三天前報名課程<br>2.入館後至1F客服中心使用QR
                    Code報到劃位</p>
                </ul>
              </div>
            </div>
            
              <div id="scroll-message" class="course-btn  col-md-12">
                <a href="#comment">
                  <div class="course-ice-btn-out">
                  <span class="course-ice-btn-in">
                    <img src="img/btn/ICE.png" alt="btn">
                    我要開團
                  </span>
                </div> 
              </a>
              </div>
           
          </div>
        </div>
      </div>
    </div>
  </section>

   <div  class="group-message-cloud"></div>

<section class="group-message-wrap">
   
    <div id="comment"  class="title-box">
          <h3 class="message-title">開團留言板</h3>
          <span>快來開團玩課程！</span>
    </div>

  <form action="course-msg.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="1" name="courseClassNo">
      <div class="group-message" >
        <div class="open-group">
          <div class="message-meb col-md-2">
            <i class="fas fa-user-circle"></i>
            <p>會員名稱</p>
            <p class="time"><?php echo date("Y-m-d"); ?></p>
          </div>
          <div class="write-area  col-md-10">
            <p>你的團名：</p>
            <input name="msgTitle" type="text" minlength="1" maxlength="10" placeholder="寫下最吸引人的團名！">
            <p>開團資訊：</p>
            <textarea name="msgContent" maxlength="100" minlength="1" id="" cols="90" rows="8" wrap="hard" 
  placeholder="揪團課程時間：
  聯絡電話：
  e-mail：
  邀請的話～"></textarea>
          </div>
          <div class="message-btn col-md-12">
          <a href="course-msg.php">
            <button type="submit" class="message-btn-out">
              <span class="message-btn-in">
                我要留言
              </span>
            </button>
          </a> 
          </div>
        </div>
  </form>

  <div class="love-line"><img src="img/course/love-line.png" alt="love-line"></div>

    <div class="array-btn">
        <a class="array-ice-btn-out" href="course-group-form.php">
          <span class="array-ice-btn-in">
            <img src="img/btn/ICE.png" alt="btn">
            主揪報團
          </span>
        </a>
    </div>

  <?php while ($row = $courseMsg -> fetchObject()) {?> 
    <div class="team-name">
        <span>團名：<?php echo $row->msg_title;?> </span>
    </div>
    <div class="main-group-message">
        <div class="message-meb col-md-2 col-2">
          <i class="fas fa-user-circle"></i>
          <p><?php echo $row->mem_name; ?></p>
          <p class="time"> <?php echo $row->msg_date;?> </p>
        </div>

        <div class="message-con col-md-10 col-10">
          <p>
            <?php echo $row->msg_content; ?>
          </p>
        </div>

        <div  class="message-btn col-md-12 join-pop-btn">
          <div class="message-btn-out join-btn">
            <span class="message-btn-in">
              我要參加
            </span>
          </div>
        </div>
    </div>
   

    <div class="pop-box">
            <div class="pop-up">
              <span  class="closeBtn" ><img src="img/pop-close.png" alt="關閉"></span> 
              <div class="pop-team-name"><p><?php echo $row->msg_title; ?></p></div>

              <div class="pop-content">
              <!-- 跳窗主揪留言 -->
                <div class="pop-main-message col-md-7 col-10">
                  <div class="message-meb col-md-2 col-2">
                    <i class="fas fa-user-circle"></i>
                    <p><?php echo $row->mem_name; ?></p>
                    <p class="time"><?php echo $row->msg_date; ?></p>
                  </div>
                  <div class="message-con col-md-10 col-10">
                    <p><?php echo $row->msg_content; ?></p>
                  </div>
                </div>
  
  
                <!-- 跳窗回覆留言 -->
              <div  class="all-message col-md-7 col-10">
                <?php 
        
        //..............抓回覆留言
            // $sql = "SELECT cm.msg_no,m.mem_no,m.mem_name,m.mem_pic, cm.course_class_no,mr.reply_date,mr.reply_content FROM msg_reply mr JOIN member m ON mr.mem_no = m.mem_no JOIN course_msg cm ON mr.msg_no = cm.msg_no WHERE course_class_no = 1 ORDER BY msg_date desc";
            //找出該留言的所有回覆
            // exit("==========".$row->msg_no);
            $replayMsg -> bindValue(':msg_no',$row->msg_no);
            $replayMsg -> execute();
            // exit("==========".$replayMsg->rowCount());
            while ($replayMsgRow = $replayMsg -> fetchObject()) { 
      
            ?> 
                  <div class="meb-add-message ">
                    <div class="meb col-md-2 ">
                      <i class="fas fa-user-circle"></i>
                      <p class="name"><?php echo $replayMsgRow->mem_name; ?></p>
                      <p class="time"><?php echo $replayMsgRow->reply_date; ?></p>
                    </div>
                    <p class="text col-md-10"><?php echo $replayMsgRow->reply_content; ?></p>
                  </div>
                    <?php  } ?> 
                </div>
    

      <div id="spotPack" style="display:none">
         
              <div class="meb-add-message " id="content">
                <div class="meb col-md-2 ">
                  <i class="fas fa-user-circle"></i>
                  <p class="name"></p>
                  <p class="time"></p>
                </div>
                <p class="text col-md-10"></p>
              </div>
         
      </div>
            <!-- 跳窗留言 -->
            <span class="msgno"><?php echo  $row->msg_no ?> </span>
            <form class="pop-leave-message col-md-8 col-10" action="course-msg.php" method="post" enctype="multipart/form-data">
              <div class="leave-message col-md-9 col-12"> <input type="text" name="reply_content"  class="leave-message-box"></div>
                <div class="message-btn col-md-2 col-12">
                  <input type="button" class="message-btn-out btn-add" name="btnReply" value="留言參加">
                    <!-- <span class="message-btn-in">
                      留言參加
                    </span> -->
                </div>
              </div>
            </form>

         </div>
      </div>
        <?php } ?>  
    
    </div>

  </section>

  <footer>
    <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
  </footer>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/course.js"></script>
  <script src="js/course-group.js"></script>
  <script src="js/shop.js"></script>
</body>

</html>