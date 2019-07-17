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
              <img id="membe-centre-img" src="img/navBar/memberIcon.png" alt="會員" />
              <span id="nav-login-icon">登入</span>
              <ul id="member-centre-down-menu">
                <div class="member-centre-triangle"></div>
                <li><a href="account.php">會員中心</a></li>
                <li><span>登出</span></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <img class="nav-bar-mp" src="img/navBar/ＭpNavBar.png" alt="ＭpNavBar" />

  <div class="icon-mp">
    <div class="icon-login-box-mp">
      <a class="nav-icon-login" href="javascript:;"><img src="img/navBar/memberIcon.png" alt="會員" /> </a><span id="nav-login-icon-p">登入</span>
    </div>
    <a href="javascript:;"><img src="img/navBar/shoppingCartIcon.png" alt="購物車" /></a>
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
      <div id="robot-conversation-list">
        <div class="robot-conversation">
          <p class="robot_text"><span>小達人:</span>請問有需要幫忙嗎？</p>
        </div>
      </div>
    </div>
    <ul class="chatBot-keyword">
      <li class="fruit">粿籽戀冰所</li>
      <li class="fruit">戀冰測驗</li>
      <li class="fruit">客製冰棒</li>
      <li class="fruit">戀菓商店</li>
      <li class="fruit">愛的留言</li>
      <li class="fruit">體驗課程</li>
      <li class="fruit">營業時間</li>
      <li class="fruit">店家地址</li>
      <li class="fruit">店家電話</li>
    </ul>
    <form>
      <div class="robot-input-block">
        <textarea name="message" id="message"></textarea>
        <button type="button" id="robot-submit">送出</button>
      </div>
    </form>
  </div>
</header>
<div id="member-login" class="member-login">
  <div id="login-interface" class="login-interface">
    <div id="member-login-close-button" class="member-login-close-button">
      <img src="img/navBar/login-interface/pop-close.png" alt="pop-close" />
    </div>
    <h2>會員登入</h2>
    <input type="text" name="mem-id" id="mem-id" value placeholder="  帳號：" />
    <input type="password" name="mem-psw" id="mem-psw" value placeholder="  密碼：" />
    <div class="login-interface-group">
      <span id="register">註冊新會員</span>
      <span id="psw-back">取回密碼</span>
      <div class="member-login-button-style">
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
  </div>
  <div id="retrieve-password" class="retrieve-password">
    <div id="retrieve-password-close-button" class="member-login-close-button">
      <img src="img/navBar/login-interface/pop-close.png" alt="pop-close" />
    </div>
    <h2>取回密碼</h2>
    <input type="text" name="retrieve-mem-id" id="retrieve-mem-id" value placeholder="  帳號：" />
    <input type="email" name="emailaddress" id="email-address" value placeholder="  信箱：" />
    <div class="login-interface-group">
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
      <input type="text" name="register-account-memName" id="register-account-mem-name" value placeholder="  姓名：" />
      <input type="text" name="register-account-mem-id" id="register-account-mem-id" value placeholder="  帳號：" />
      <input type="password" name="register-account-mem-psw" id="register-account-mem-psw" value placeholder="  密碼：" />
      <input type="password" name="register-account-confirm-mem-psw" id="register-account-confirm-mem-psw" value placeholder="  確認密碼：" />
      <input type="email" name="register-account-emailaddress" id="register-account-email-address" value placeholder="  信箱：" />
    </div>
    <div class="register-account-button-style">
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
</div>