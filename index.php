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
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="WOW-master/css/libs/animate.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
  </head>
  <body>
    <input type="checkbox" id="menu-control" />
    <header id="header">
      <div class="item-group">
        <div class="logo-item">
          <a href="index.html" class="logo" title="菓籽戀冰所"
            ><img src="img/navBar/logo.png" alt="菓籽戀冰所"
          /></a>
          <label class="hb" for="menu-control">
            <span class="bar bar1"></span>
            <span class="bar bar2"></span>
            <span class="bar bar3"></span>
          </label>
        </div>
        <div class="nav-item">
          <ul class="nav-list nav-list-mp">
            <li>
              <a
                id="qa-item-show"
                class="nav-text"
                href="qa.html"
                title="戀愛冰品"
                ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                  >戀愛冰品</span
                ></a
              >
            </li>
            <li>
              <a
                id="custom-item-show"
                class="nav-text"
                href="custom.html"
                title="冰棒客製"
                ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                  >冰棒客製</span
                ></a
              >
            </li>
            <li>
              <a
                id="message-item-show"
                class="nav-text"
                href="leavemessage.html"
                title="愛的留言"
                ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                  >愛的留言</span
                ></a
              >
            </li>
            <li>
              <a
                id="newshop-item-show"
                class="nav-text"
                href="shop.html"
                title="冰品商城"
                ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                  >冰品商城</span
                ></a
              >
            </li>
          </ul>
          <div class="nav-box"></div>
          <ul class="nav-list nav-list-login">
            <li id="nav-drop-down-menu-hover" class="nav-drop-down-menu-hover">
              <a
                id="course-item-show"
                class="nav-text"
                href="courseP.html"
                title="體驗課程"
                ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                  >體驗課程</span
                ></a
              >
              <ul id="nav-drop-down-menu" class="nav-drop-down-menu">
                <li><a href="courseP-group.html">揪團課程</a></li>
                <li><a href="courseP-general.html">一般課程</a></li>
              </ul>
            </li>
            <li>
              <a
                id="new-item-show"
                class="nav-text"
                href="news.html"
                title="最新消息"
                ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                  >最新消息</span
                ></a
              >
            </li>
            <li>
              <a
                id="about-item-show"
                class="nav-text"
                href="javascript:;"
                title="關於園區"
                ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                  >關於園區</span
                ></a
              >
            </li>
            <li class="nav-item-icom-group">
              <ul class="nav-item-icom">
                <li class="shopping-cart-icon">
                  <a href="javascript:;"
                    ><img src="img/navBar/shoppingCartIcon.png" alt="購物車"
                  /></a>
                </li>
                <li class="member-icon">
                  <a class="nav-icon-login" href="account-profile.html"
                    ><img src="img/navBar/memberIcon.png" alt="會員" />
                    <span>登入</span></a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <img class="nav-bar-mp" src="img/navBar/ＭpNavBar.png" alt="ＭpNavBar" />

      <div class="icon-mp">
        <div class="icon-login-box-mp">
          <a class="nav-icon-login" href="javascript:;"
            ><img src="img/navBar/memberIcon.png" alt="會員" />
            <span>登入</span></a
          >
        </div>
        <a href="javascript:;"
          ><img src="img/navBar/shoppingCartIcon.png" alt="購物車"
        /></a>
      </div>
      <img
        class="shopping-cart-icon-mp"
        src="img/navBar/shoppingCartIcon.png"
        alt="shoppingCartIcon.png"
      />
      <div id="robot-container" class="robot-container">
        <div id="robot-title-block" class="robot-title-block">
          <span class="robot-title-icon"
            ><img
              id="robot-title-icon-img"
              src="img/navBar/robot/robot-icon.png"
              alt="robot-icon"
            />
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

    <section class="index-hero-bgc ">
      <div class="mountain">
        <img src="img/indexImg/heroImg.png" alt="山" />
      </div>
      <img
        class="heroImg-watermelon"
        src="img/indexImg/heroImg-watermelon.png"
        alt="西瓜山"
      />
      <img
        class="heroImg-castle"
        src="img/indexImg/heroImg-castle.png"
        alt="城堡"
      />
      <img
        class="hero-bgi-cloud cloudA"
        src="img/indexImg/hero-bgi-cloud-a.png"
        alt="背景雲"
      />
      <img
        class="hero-bgi-cloud cloudB"
        src="img/indexImg/hero-bgi-cloud-b.png"
        alt="背景雲"
      />
      <img class="flyship" src="img/indexImg/flyship.gif" alt="fiyship-text" />
      <img
        class="style-cloud-a"
        src="img/indexImg/styleCloud.png"
        alt="styleCloud"
      />
      <img
        class="style-cloud-b"
        src="img/indexImg/styleCloud.png"
        alt="styleCloud"
      />
      <img
        class="style-cloud-c"
        src="img/indexImg/styleCloud.png"
        alt="styleCloud"
      />
      <img
        class="style-cloud-d"
        src="img/indexImg/styleCloud.png"
        alt="styleCloud"
      />
      <img
        class="style-cloud-e"
        src="img/indexImg/styleCloud.png"
        alt="styleCloud"
      />
      <div class="hero-green"></div>
      <img
        class="icecream-lemon icecream"
        src="img/indexImg/icecream-lemon .png"
        alt="冰棒"
      />
      <img
        class="icecream-b icecream"
        src="img/indexImg/icecream-b.png"
        alt="冰棒"
      />
      <img
        class="icecream-p icecream"
        src="img/indexImg/icecream-p.png"
        alt="冰棒"
      />
      <img
        class="icecream-r icecream"
        src="img/indexImg/icecream-r.png"
        alt="冰棒"
      />
      <img
        class="icecream-b1 icecream"
        src="img/indexImg/icecream-b1.png"
        alt="冰棒"
      />
      <img
        class="icecream-y icecream"
        src="img/indexImg/icecream-y.png"
        alt="冰棒"
      />
      <div class="heroIce">
        <img class="heroIce-p" src="img/indexImg/heroIce.png" alt="冰棒人物" />
        <img class="love-S" src="img/indexImg/love-S.png" alt="愛心" />
        <img class="love-S-a" src="img/indexImg/love-S.png" alt="愛心" />
      </div>
    </section>

    <section class="index-qa-bgc">
      <img class="qabgc-top" src="img/indexImg/QaBgc-1.png" alt="QaBgc" />

      <div class="index-title-group  wow bounceIn">
        <div class="index-title-icon">
          <img src="img/indexImg/love-icon1.png" alt="icon" />
        </div>
        <div class="index-title-content">
          <h2>戀冰測驗</h2>
          <span>推薦屬於你感情階段的水果冰搭配</span>
        </div>
      </div>

      <img
        class="mailer-top  wow bounceIn"
        src="img/indexImg/mailer-2.png"
        alt="QaBgc"
      />
      <div id="mailer-middle" class="mailer-middle wow bounceIn">
        <div class="mailer-qa-box">
          <h3 class="ml9">
            <span class="text-wrapper">
              <span class="letters"
                >Q:你希望自己在愛情裡收穫到的是什麼呢？</span
              >
            </span>
          </h3>
        </div>
        <a class="qa-button-custom" href="qa.html">
          <div class="qa-button-style">
            <div class="qa-button-style-botton">
              <div class="qa-inner-style">
                <div class="qa-button-text-style">
                  <span class="qa-button-text">
                    (A)真愛
                  </span>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a class="qa-button-custom" href="qa.html">
          <div class="qa-button-style">
            <div class="qa-button-style-botton">
              <div class="qa-inner-style">
                <div class="qa-button-text-style">
                  <span class="qa-button-text">
                    (Ｂ)信任
                  </span>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a class="qa-button-custom" href="qa.html">
          <div class="qa-button-style">
            <div class="qa-button-style-botton">
              <div class="qa-inner-style">
                <div class="qa-button-text-style">
                  <span class="qa-button-text">
                    (C)快樂
                  </span>
                </div>
              </div>
            </div>
          </div>
        </a>
        <form action="qa.html" method="POST"></form>
      </div>
      <img
        class="mailer-bottom  wow bounceIn"
        data-aos="fade-down-left"
        src="img/indexImg/mailer-1.png"
        alt="QaBgc"
      />
      <img class="qabgc-bottom" src="img/indexImg/QaBgc.png" alt="background" />
    </section>

    <section class="index-cp-bgc">
      <div class="index-title-group  wow tada">
        <div class="index-title-icon">
          <img src="img/indexImg/love-icon2.png" alt="icon" />
        </div>
        <div class="index-title-content">
          <h2>客製戀冰菓</h2>
          <span>讓愛情來打造專屬於你們的戀曲水果冰</span>
        </div>
      </div>
      <img
        id="iceShadow"
        class="iceShadow"
        src="img/indexImg/iceShadow.png"
        alt="iceShadow"
      />
      <img
        class="c-p-store wow tada"
        src="img/indexImg/customized-products-store.png"
        alt="store"
      />
      <div class="ice-panel wow tada">
        <h3>選擇製冰容器</h3>
        <div class="panel-button-item-group">
          <div id="model-general-button" class="panel-button-bottom">
            <div class="panel-button-center">
              <div class="panel-button-bottom-pink">
                <img src="img/indexImg/model-general.png" alt="model-general" />
              </div>
              <span>一般模型</span>
              <div class="panel-button-center-triangle-group">
                <div class="panel-button-center-triangle"></div>
                <div class="panel-button-center-triangle"></div>
                <div class="panel-button-center-triangle"></div>
                <div class="panel-button-center-triangle"></div>
              </div>
            </div>
          </div>
          <div id="model-bear-paw-button" class="panel-button-bottom">
            <div class="panel-button-center">
              <div class="panel-button-bottom-pink">
                <img
                  src="img/indexImg/model-bear-paw.png"
                  alt="model-bear-paw"
                />
              </div>
              <span>熊掌模型</span>
              <div class="panel-button-center-triangle-group"></div>
            </div>
          </div>
          <div id="model-rabbit-button" class="panel-button-bottom">
            <div class="panel-button-center">
              <div class="panel-button-bottom-pink">
                <img src="img/indexImg/model-rabbit.png" alt="model-rabbit" />
              </div>
              <span>兔子模型</span>
              <div class="panel-button-center-triangle-group"></div>
            </div>
          </div>
          <div id="model-rocket-button" class="panel-button-bottom">
            <div class="panel-button-center">
              <div class="panel-button-bottom-pink">
                <img src="img/indexImg/model-rocket.png" alt="model-rocket" />
              </div>
              <span>火箭模型</span>
              <div class="panel-button-center-triangle-group"></div>
            </div>
          </div>
        </div>
        <a class="c-p-button-custom" href="custom.html">
          <div class="c-p-button-style">
            <div class="c-p-button-style-botton">
              <div class="inner-style">
                <div class="c-p-button-text-style">
                  <span class="c-p-button-text">
                    <img class="btn-ice" src="img/btn/ICE.png" alt="ICE" />
                    立即製作
                  </span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <img
        id="model-general"
        class="model-general wow tada"
        src="img/indexImg/model-general.png"
        alt="general"
      />
      <img
        id="model-bear"
        class="model-bear"
        src="img/indexImg/model-bear-paw.png"
        alt="general"
      />
      <img
        id="model-rabbit"
        class="model-rabbit"
        src="img/indexImg/model-rabbit.png"
        alt="general"
      />
      <img
        id="model-rocket"
        class="model-rocket"
        src="img/indexImg/model-rocket.png"
        alt="general"
      />

      <img
        class="diyIcebgc-top"
        src="img/indexImg/diyIcebgc-top.png"
        alt="diyIcebgc-top"
      />
      <img
        class="diy-ice-bgc"
        src="img/indexImg/diyIcebgc.png"
        alt="diyIcebgc"
      />
      <div class="c-p-single">
        <img
          id="user-ice1"
          class="wow bounceInDown"
          src="img/indexImg/userIce1.png"
          alt="userIce"
        />
        <img id="single" src="img/indexImg/single.png" alt="single" />
      </div>
      <div class="c-p-firstLove">
        <img
          id="user-ice2"
          class="wow bounceInDown"
          data-wow-delay="0.5s"
          src="img/indexImg/userIce4.png"
          alt="userIce"
        />
        <img src="img/indexImg/firstLove.png" alt="firstLove" />
      </div>
      <div class="c-p-love">
        <img
          id="user-ice3"
          class="wow bounceInDown"
          data-wow-delay="1s"
          src="img/indexImg/userIce3.png"
          alt="userIce"
        />
        <img src="img/indexImg/love.png" alt="love" />
      </div>
      <div class="c-p-lostLove">
        <img
          id="user-ice4"
          class="wow bounceInDown"
          data-wow-delay="1.3s"
          src="img/indexImg/userIce2.png"
          alt="userIce"
        />
        <img src="img/indexImg/lostLove.png" alt="love" />
      </div>
    </section>

    <section class="index-store-bgc">
      <img class="store-bgc" src="img/indexImg/store-bgc.png" alt="store" />
      <div class="index-title-group wow swing">
        <div class="index-title-icon">
          <img src="img/indexImg/love-icon3.png" alt="icon" />
        </div>
        <div class="index-title-content">
          <h2>戀菓商店</h2>
          <span>各式各樣的冰品都在戀冰商店唷</span>
        </div>
      </div>

      <div class="store-group">
        <a href="shop.html"> <img src="img/indexImg/store.png" alt="store"/></a>
      </div>
      <div class="store-group-item-group">
        <div class="store-item-single wow bounceInRight">
          <span class="store-item-text">SINGLE</span>
          <div class="store-item-img">
            <div class="store-item-img-box">
              <img
                src="img/indexImg/index-ice-first-love-single.png"
                alt="index-ice-first-love-single"
              />
            </div>
            <span>芋頭牛奶</span>
            <span>NT250</span>
          </div>
          <a class="store-button-custom" href="newshop.html">
            <div class="store-button-style">
              <div class="store-button-style-botton">
                <div class="store-inner-style">
                  <div class="store-button-text-style">
                    <span class="store-button-text">
                      立即選購
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div
          class="store-item-first-love wow bounceInRight"
          data-wow-delay="0.5s"
        >
          <span class="store-item-text">FIRST LOVE</span>
          <div class="store-item-img">
            <div class="store-item-img-box">
              <img
                src="img/indexImg/index-ice-first-love-single.png"
                alt="index-ice-first-love-single"
              />
            </div>
            <span>芋頭牛奶</span>
            <span>NT250</span>
          </div>
          <a class="store-button-custom" href="newshop.html">
            <div class="store-button-style">
              <div class="store-button-style-botton">
                <div class="store-inner-style">
                  <div class="store-button-text-style">
                    <span class="store-button-text">
                      立即選購
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div
          class="store-item-fall-in-love wow bounceInRight"
          data-wow-delay="1s"
        >
          <span class="store-item-text">FALL IN LOVE</span>
          <div class="store-item-img">
            <div class="store-item-img-box">
              <img
                src="img/indexImg/index-ice-first-love-single.png"
                alt="index-ice-first-love-single"
              />
            </div>
            <span>芋頭牛奶</span>
            <span>NT250</span>
          </div>
          <a class="store-button-custom" href="newshop.html">
            <div class="store-button-style">
              <div class="store-button-style-botton">
                <div class="store-inner-style">
                  <div class="store-button-text-style">
                    <span class="store-button-text">
                      立即選購
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div
          class="store-item-break-up wow bounceInRight"
          data-wow-delay="1.5s"
        >
          <span class="store-item-text">BREAK UP</span>
          <div class="store-item-img">
            <div class="store-item-img-box">
              <img
                src="img/indexImg/index-ice-first-love-single.png"
                alt="index-ice-first-love-single"
              />
            </div>
            <span>芋頭牛奶</span>
            <span>NT250</span>
          </div>
          <a class="store-button-custom" href="newshop.html">
            <div class="store-button-style">
              <div class="store-button-style-botton">
                <div class="store-inner-style">
                  <div class="store-button-text-style">
                    <span class="store-button-text">
                      立即選購
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <img
        class="store-bgc-mountain"
        src="img/indexImg/store-bgc-mountain.png"
        alt="mountain"
      />
      <div class="store-bgc-way"></div>
    </section>

    <section class="index-leavemessage-bgc">
      <div class="index-title-group wow rotateInDownLeft">
        <div class="index-title-icon">
          <img src="img/indexImg/love-icon4.png" alt="icon" />
        </div>
        <div class="index-title-content">
          <h2>愛的留言</h2>
          <span>大聲說出你心裡的話語吧</span>
        </div>
      </div>
      <div class="leavemessage-item-group">
        <div class="message-item single wow flipInY">
          <div class="leavemessage-cloud">
            <img src="img/indexImg/store/store-single-item-icon.png" alt="" />
          </div>
          <div class="message-header">
            <div class="message-header-icon">
              <img src="img/indexImg/store/user-icon.png" alt="user-icon" />
            </div>
            <p>會員名稱</p>
          </div>
          <div class="message-body">
            <figure>
              <img src="img/course/diyimg3.png" alt="上傳照片" />
            </figure>
            <div class="message-text">
              <h3><span>To:</span>王先生</h3>
              <p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
              <span class="s-text">#語重心長</span>
            </div>
          </div>
          <div class="custom-ice">
            <img src="img/message/ice-blue.png" alt="客製冰棒" />
          </div>
        </div>
        <div class="message-item first-love wow flipInY" data-wow-delay="0.5s">
          <div class="leavemessage-cloud">
            <img
              src="img/indexImg/store/store-first-lovepng-item-icon.png"
              alt=""
            />
          </div>
          <div class="message-header">
            <div class="message-header-icon">
              <img src="img/indexImg/store/user-icon.png" alt="user-icon" />
            </div>
            <p>會員名稱</p>
          </div>
          <div class="message-body">
            <figure>
              <img src="img/course/diyimg3.png" alt="上傳照片" />
            </figure>
            <div class="message-text">
              <h3><span>To:</span>王先生</h3>
              <p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
              <span class="s-text">#語重心長</span>
            </div>
          </div>
          <div class="custom-ice">
            <img src="img/message/ice-blue.png" alt="客製冰棒" />
          </div>
        </div>
        <div class="message-item fall-in-love wow flipInY " data-wow-delay="1s">
          <div class="leavemessage-cloud">
            <img src="img/indexImg/store/store-love-item-icon.png" alt="" />
          </div>
          <div class="message-header">
            <div class="message-header-icon">
              <img src="img/indexImg/store/user-icon.png" alt="user-icon" />
            </div>
            <p>會員名稱</p>
          </div>
          <div class="message-body">
            <figure>
              <img src="img/course/diyimg3.png" alt="上傳照片" />
            </figure>
            <div class="message-text">
              <h3><span>To:</span>王先生</h3>
              <p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
              <span class="s-text">#語重心長</span>
            </div>
          </div>
          <div class="custom-ice">
            <img src="img/message/ice-blue.png" alt="客製冰棒" />
          </div>
        </div>
        <div class="message-item break-up wow flipInY" data-wow-delay="1.5s">
          <div class="leavemessage-cloud">
            <img
              src="img/indexImg/store/store-lost-love-item-icon.png"
              alt=""
            />
          </div>
          <div class="message-header">
            <div class="message-header-icon">
              <img src="img/indexImg/store/user-icon.png" alt="user-icon" />
            </div>
            <p>會員名稱</p>
          </div>
          <div class="message-body">
            <figure>
              <img src="img/course/diyimg3.png" alt="上傳照片" />
            </figure>
            <div class="message-text">
              <h3><span>To:</span>王先生</h3>
              <p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
              <span class="s-text">#語重心長</span>
            </div>
          </div>
          <div class="custom-ice">
            <img src="img/message/ice-blue.png" alt="客製冰棒" />
          </div>
        </div>
      </div>

      <!-- 背景 -->
      <img
        class="leavemessage-bgc"
        src="img/indexImg/store/leavemessage-bgc.png"
        alt="leavemessage-bgc"
      />
      <img
        class="leavemessage-Material"
        src="img/indexImg/store/leavemessage-Material-bgc.png"
        alt="leavemessage-Material"
      />
    </section>

    <section class="index-course-bgc">
      <img
        class="course-cloud-bgc"
        src="img/indexImg/course/course-cloud-bgc.png"
        alt="course-cloud"
      />
      <div class="index-title-group wow rollIn">
        <div class="index-title-icon">
          <img src="img/indexImg/course/love-icon5.png" alt="icon" />
        </div>
        <div class="index-title-content">
          <h2>體驗課程</h2>
          <span>參加各種活動來增加自己的甜蜜愛情吧</span>
        </div>
      </div>
      <div id="course-blue-ship" class="course-blue-ship">
        <div class="course-blue-ship-content">
          <div class="course-title">
            <div class="course-ice-icon">
              <img
                src="img/indexImg/course/course-ice-icon.png"
                alt="course-ice-icon"
              />
            </div>
            <h3>揪團課程</h3>
          </div>
          <div class="course-title-content">
            <h4>你儂我儂甜心冰淇淋蛋糕</h4>
            <p>
              <span>報名方式：</span>
              1.線上揪團：由揪團主發起課程，並於三天前報名課程
              2.入館後至1F客服中心請揪團主使用QR Code報到
            </p>
          </div>
          <a class="course-button-custom" href="courseGroup.html">
            <div class="course-button-style">
              <div class="course-button-style-botton">
                <div class="course-inner-style">
                  <div class="course-button-text-style">
                    <span class="course-button-text">
                      立即揪團
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="course-blue-ship-img">
          <img src="img/indexImg/course/course-blue-ship.png" alt="blue-ship" />
        </div>
      </div>

      <div id="course-pink-ship" class="course-pink-ship">
        <div class="course-pink-ship-content">
          <div class="course-title">
            <div class="course-ice-icon">
              <img
                src="img/indexImg/course/course-ice-icon.png"
                alt="course-ice-icon"
              />
            </div>
            <h3>一般課程</h3>
          </div>
          <div class="course-title-content">
            <h4>戀愛小馬夢幻冰品</h4>
            <p>
              <span>報名方式：</span>
              1.線上預約(須提前30分鐘至1F客服中心報到，逾時將留給現場後位)
              2.入館後至1F客服中心使用QR Code報到劃位
            </p>
          </div>
          <a class="course-button-custom" href="courseGroup.html">
            <div class="course-button-style">
              <div class="course-button-style-botton">
                <div class="course-inner-style">
                  <div class="course-button-text-style">
                    <span class="course-button-text">
                      立即揪團
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="course-blue-ship-img">
          <img src="img/indexImg/course/course-pink-ship.png" alt="blue-ship" />
        </div>
      </div>
      <div class="ship-button">
        <img
          id="blue-ship-button"
          src="img/indexImg/course/arrow-right-button.png"
          alt="button"
        />
        <img
          id="pink-ship-button"
          src="img/indexImg/course/arrow-right-button.png"
          alt="button"
        />
      </div>
    </section>

    <section class="index-news-bgc">
      <div class="index-title-group wow bounceInDown">
        <div class="index-title-icon">
          <img src="img/indexImg/news/love-icon6.png" alt="icon" />
        </div>
        <div class="index-title-content">
          <h2>最新消息</h2>
          <span>菓籽戀冰所的最新消息都在這哦</span>
        </div>
      </div>
      <div class="index-news-content wow bounceInUp">
        <div class="index-news-content-group">
          <div class="index-news-content-item-group">
            <div class="index-news-content-img">
              <img src="img/indexImg/news/news-img.png" alt="" />
            </div>
            <div class="index-news-content-item">
              <div class="index-news-content-list">
                <div class="index-news-content-icon">最新消息</div>
                <div class="index-news-conten-text-group">
                  <h3>《2019》水果冰特展 系列講座</h3>
                  <p>(報名時間: 親子講座 7/11-、青少年講座 7/18)</p>
                </div>
              </div>
              <div class="index-news-content-list">
                <div class="index-news-content-icon-g">最新消息</div>
                <div class="index-news-conten-text-group">
                  <h3>《2019》水果冰特展 系列講座</h3>
                  <p>(報名時間: 親子講座 7/11-、青少年講座 7/18)</p>
                </div>
              </div>
              <div class="index-news-content-list">
                <div class="index-news-content-icon-y">最新消息</div>
                <div class="index-news-conten-text-group">
                  <h3>《2019》水果冰特展 系列講座</h3>
                  <p>(報名時間: 親子講座 7/11-、青少年講座 7/18)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img
        class="news-cloud"
        src="img/indexImg/news/news-cloud.png"
        alt="news-cloud"
      />
      <img
        class="news-bgi"
        src="img/indexImg/news/news-bgi.png"
        alt="news-bgi"
      />
    </section>

    <footer>
      <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
    </footer>
    <script src="WOW-master/dist/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="js/nav.js"></script>
    <script src="js/index.js"></script>

  </body>
</html>
