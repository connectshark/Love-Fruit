<input type="checkbox" id="menu-control" />
<header id="header">
  <div class="item-group">
    <div class="logo-item">
      <a href="index.php" class="logo" title="菓籽戀冰所"><img src="img/navBar/logo.png" alt="菓籽戀冰所" /></a>
      <label class="hb" for="menu-control">
        <span class="bar bar1"></span>
        <span class="bar bar2"></span>
        <span class="bar bar3"></span>
      </label>
    </div>
    <div class="nav-item">
      <ul class="nav-list nav-list-mp">
        <li>
          <a id="qa-item-show" class="nav-text" href="qa.php" title="戀愛冰品"><img src="img/navBar/navIcon.png" alt="iceIcon" /><span>戀愛冰品</span></a>
        </li>
        <li>
          <a id="custom-item-show" class="nav-text" href="custom.php" title="冰棒客製"><img src="img/navBar/navIcon.png" alt="iceIcon" /><span>冰棒客製</span></a>
        </li>
        <li>
          <a id="message-item-show" class="nav-text" href="leavemessage.php" title="愛的留言"><img src="img/navBar/navIcon.png" alt="iceIcon" /><span>愛的留言</span></a>
        </li>
        <li>
          <a id="newshop-item-show" class="nav-text" href="shop.php" title="冰品商城"><img src="img/navBar/navIcon.png" alt="iceIcon" /><span>冰品商城</span></a>
        </li>
      </ul>
      <div class="nav-box"></div>
      <ul class="nav-list nav-list-login">
        <li id="nav-drop-down-menu-hover" class="nav-drop-down-menu-hover">
          <a id="course-item-show" class="nav-text" href="course.php" title="體驗課程"><img src="img/navBar/navIcon.png" alt="iceIcon" /><span>體驗課程</span></a>
          <ul id="nav-drop-down-menu" class="nav-drop-down-menu">
            <li><a href="course-group.php">揪團課程</a></li>
            <li><a href="course-general.php">一般課程</a></li>
          </ul>
        </li>
        <li>
          <a id="new-item-show" class="nav-text" href="news.php" title="最新消息"><img src="img/navBar/navIcon.png" alt="iceIcon" /><span>最新消息</span></a>
        </li>
        <li>
          <a id="about-item-show" class="nav-text" href="javascript:;" title="關於園區"><img src="img/navBar/navIcon.png" alt="iceIcon" /><span>關於園區</span></a>
        </li>
        <li class="nav-item-icom-group">
          <ul class="nav-item-icom">
            <li class="shopping-cart-icon">
              <a href="javascript:;"><img src="img/navBar/shoppingCartIcon.png" alt="購物車" /></a>
            </li>
            <li class="member-icon">
              <div id="membe-centre-img-circle">
                <img id="membe-centre-use-img" class="membe-centre-img" src="<?php echo $_SESSION["mem_pic"] ?>" alt="會員" />
              </div>
              <ul id="member-centre-down-menu" style="opacity: 0; transform: translateY(0%);">
                <div class="member-centre-triangle"></div>
                <li><span id="user-name"><?php echo $_SESSION["mem_name"] ?></span></li>
                <li><a href="account.php">會員中心</a></li>
                <li><span id="login-out">登出</span></li>
              </ul>
              <span id="nav-login-icon">登入</span>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <img class="nav-bar-mp" src="img/navBar/ＭpNavBar.png" alt="ＭpNavBar" />

  <div class="icon-mp">
    <div class="icon-login-box-mp">
      <div id="icon-login-box-mp-img">
        <img id="icon-login-box-mp-user-img" src="<?php echo $_SESSION["mem_pic"] ?>" alt="會員" />
      </div>
      <span id="nav-login-icon-p">登入</span>
      <div id="member-centre-panel-p" class="member-centre-panel-p" style="opacity: 0; transform: translateY(0%);">
        <div class="member-centre-panel-p-triangle"></div>
        <span id="user-nam-p"><?php echo $_SESSION["mem_name"] ?></span>
        <span>會員中心</span>
        <span id="login-out-p">登出</span>
      </div>
    </div>
    <img id="shoppingCartIconP" src="img/navBar/shoppingCartIcon.png" alt="購物車" />
  </div>
  <img class="shopping-cart-icon-mp" src="img/navBar/shoppingCartIcon.png" alt="shoppingCartIcon.png" />
  <div id="robot-container" class="robot-container">
    <div id="robot-title-block" class="robot-title-block">
      <span class="robot-title-icon"><img id="robot-title-icon-img" src="img/navBar/robot/robot-icon.png" alt="robot-icon" />
      </span>
      <h3>冰棒小達人</h3>
      <div class="robot-pic">
        <img src="img/navBar/robot/robot.png" alt="robot-pic" />
      </div>
    </div>
    <div id="robot-conversation-block" class="robot-conversation-block">
      <div id="robot-conversation-list-group">
        <div id="robot-conversation-list" class="robot-conversation-list" style="display:none">
          <div id="robot-conversation-robot" class="robot-conversation-robot">
            <span class="question">使用者回答</span>
          </div>
          <div id="robot-conversation-user" class="robot-conversation-user">
            <span class="answer">機器人回答</span>
          </div>
        </div>
      </div>
    </div>
    <div class="chatBot-keyword">
      <input class="fruit" value="粿籽戀冰所" type="button">
      <input class="fruit" value="戀冰測驗" type="button">
      <input class="fruit" value="客製冰棒" type="button">
      <input class="fruit" value="戀菓商店" type="button">
      <input class="fruit" value="愛的留言" type="button">
      <input class="fruit" value="體驗課程" type="button">
      <input class="fruit" value="營業時間" type="button">
      <input class="fruit" value="店家電話" type="button">
    </div>
    <div class="robot-input-block">
      <input id="message" type="text">
      <button type="button" id="robot-submit">送出</button>
    </div>
  </div>
</header>
<section id="member-login" class="member-login">
  <div id="login-interface" class="login-interface">
    <div id="member-login-close-button" class="member-login-close-button">
      <img src="img/navBar/login-interface/pop-close.png" alt="pop-close" />
    </div>
    <h2>會員登入</h2>
    <div class="member-login-input">
      <input type="text" name="mem-id" id="mem-id" placeholder="  帳號：" />
      <input type="password" name="mem-psw" id="mem-psw" placeholder="  密碼：" />
    </div>
    <div class="login-interface-group">
      <span id="register">註冊新會員</span>
      <span id="psw-back">取回密碼</span>
    </div>
    <span id="member-login-erroMsg"></span>
    <div id="member-login-button-style" class="member-login-button-style">
      <div class="member-login-button-style-botton">
        <div class="member-login-inner-style">
          <div class="member-login-button-text-style">
            <span class="member-login-button-text">
              <img class="member-login-btn-ice" src="img/btn/ICE.png" alt="ICE" />
              登入
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="retrieve-password" class="retrieve-password">
    <div id="retrieve-password-close-button" class="member-login-close-button">
      <img src="img/navBar/login-interface/pop-close.png" alt="pop-close" />
    </div>
    <h2>取回密碼</h2>
    <input type="text" name="retrieve-mem-id" id="retrieve-mem-id" placeholder="  帳號：" />
    <input type="email" name="emailaddress" id="email-address" placeholder="  信箱：" />
    <span id="retrieve-password-erroMsg"></span>
    <div id="login-retrieve-password-button" class="login-retrieve-password-button">
      <div class="member-login-button-style">
        <div class="member-login-button-style-botton">
          <div class="member-login-inner-style">
            <div class="member-login-button-text-style">
              <span class="retrieve-password-button-text">
                <img class="member-login-btn-ice" src="img/btn/ICE.png" alt="ICE" />
                確認送出
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <div id="register-account" class="register-account">
    <div id="register-account-close-button" class="register-account-close-button">
      <img src="img/navBar/login-interface/pop-close.png" alt="pop-close" />
    </div>
    <h2 id="register-account-title">會員註冊</h2>
    <div class="register-account-group">
      <div class="register-account-input-group">
        <span>姓名：</span>
        <input maxlength="10" type="text" name="register-account-memName" id="register-account-mem-name" placeholder=" 姓名：" />
      </div>
      <div class="register-account-input-group">
        <span>帳號：</span>
        <input maxlength="10" type="text" name="register-account-mem-id" id="register-account-mem-id" placeholder=" 帳號：" />
      </div>
      <div class="register-account-input-group">
        <span>密碼：</span>
        <input maxlength="10" type="password" name="register-account-mem-psw" id="register-account-mem-psw" placeholder=" 密碼：" />
      </div>
      <div class="register-account-input-group">
        <span>確認密碼：</span>
        <input maxlength="10" type="password" name="register-account-confirm-mem-psw" id="register-account-confirm-mem-psw" placeholder=" 確認密碼：" />
      </div>
      <div class="register-account-input-group">
        <span>信箱：</span>
        <input maxlength="30" type="email" name="register-account-emailaddress" id="register-account-email-address" placeholder=" 信箱：" />
      </div>
      <input type="register-memberIcon" name="register-memberIcon" id="register-memberIcon" value="database/img_mem/memberIcon.png" />
    </div>
    <span id="register-erroMsg"></span>
    <div id="register-account-button-style" class="register-account-button-style">
      <div class="register-account-button-style-botton">
        <div class="register-account-inner-style">
          <div class="register-account-button-text-style">
            <span class="register-account-button-text">
              <img class="register-account-btn-ice" src="img/btn/ICE.png" alt="ICE" />
              確認送出
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="mini-cart">
  <div class="head">
    <div class="cart-icon">
      <img src="img/navBar/shoppingCartIcon.png" alt="">
      <h3>
        我的購物車
      </h3>
    </div>
    <div class="cart-close">
      <i class="fas fa-times ">
      </i>
    </div>
  </div>
  <div id="mini-item">
  </div>
</section>