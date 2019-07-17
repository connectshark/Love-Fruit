<!DOCTYPE html>
<html lang="UTF-8">

<head>
	<meta charset="UTF-8">
	<title>菓籽戀冰所-客製冰棒</title>
	<meta name="keywords" content="菓籽戀冰所" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="icon" href="img/navBar/logo.png" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/nav.css" />
	<link rel="stylesheet" href="css/custom.css" />
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/custombtn.css">
    <link rel="stylesheet" href="css/custom-pop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body>
    <?php
    require_once("nav.php");
    ?>
	<div class="custom" id="app">
		<section class="custom-list">
			<div class="custom-list-scale">
				<img src="img/custom/scale.png" alt="磅秤">
			</div>
			<div class="custom-list-support">
				<span class="point"></span>
				<span class="point"></span>
			</div>
			<div class="custom-list-item">
				<div class="custom-list-item-umberlla">
					<img src="img/custom/umbrella.png" alt="雨傘">
				</div>
				<div class="custom-list-item-price">
					<div class="price-lock">
						<img src="img/custom/lock.png" alt="lock">
					</div>
					<div class="price-table">
						<div class="price-title">
							<h2>購買清單</h2>
						</div>
						<div class="price-list">
							<table class="price-s-table">
								<tr>
									<th>
                                        <div id="texture-min">
                                            <img id="texture-min-img">
                                        </div>
                                    </th>
                                    <td class="list-description">模型</td>
									<td>150</td>
								</tr>
								<tr>
									<th>
                                        <div id="fruite-a">
                                            <img>
                                        </div>
                                    </th>
                                    <td id="list-description-a">水果A</td>
									<td id="list-price-a"></td>
								</tr>
								<tr>
									<th>
                                        <div id="fruite-b">
                                            <img>
                                        </div>
                                    </th>
                                    <td id="list-description-b">水果B</td>
									<td id="list-price-b"></td>
								</tr>
                                <tr>
                                    <th>
                                        <div id="slice-m">
                                            <img>
                                        </div>
                                    </th>
                                    <td id="slice-description"></td>
                                    <td id="slice-price"></td>
                                </tr>
								<tfoot>
									<th colspan="2">總價:</th>
									<td id="total-price"></td>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="mood">
				<div class="face">
					<canvas width="150px" height="150px" id="mood">
						看不到
					</canvas>
				</div>
				<div class="progress">
					<div class="category">
						<span class="category-item">酸</span>
						<span class="category-item">甜</span>
						<span class="category-item">苦</span>
					</div>
					<div class="progress-group">
						<div class="default">
							<div class="progress-bar" id="acid"></div>
						</div>
						<div class="default">
							<div class="progress-bar" id="sweet"></div>
						</div>
						<div class="default">
							<div class="progress-bar" id="bitter"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="custom-main">
			<div class="back step-group">
                <h2>流程</h2>
                <ul class="step">
                    <li class="active step-item">外觀</li>
                    <li class="step-item">基底</li>
                    <li class="step-item">加料</li>
                    <li class="step-item">冰棒小語</li>
                <div class="clearfix"></div>
                </ul>
            </div>
			<div class="custom-main-show" id="show">
                <div class="custom-show-area img-p-0" id="texture-p">
                    <img id="texture-main" src="img/custom/texture1.png">
                    <div id="slice-main">
                        <img>
                    </div>
                </div>
                    <div class="ice-stick" id="ice-stick">
                        <p><span>#</span>{{message}}</p>
                    </div>
			</div>
			<div class="custom-bottom">
			</div>
		</section>
		<section class="custom-aside back">
            <div class="flow">
    			<div class="aside-title">
    				<h2>選擇製冰容器</h2>
    			</div>
    			<div class="aside-select">
    				<div class="select-item select-item-4">
                        <label for="texture1">
    					<div class="texture-item texture-select">
    						<figure>
                                <img src="img/custom/texture1.png" alt="冰棒模型">
                            </figure>
                                <p>冰棒模型</p>
    					</div></label>
    				</div>
    				<div class="select-item select-item-4">
                        <label for="texture2">
    					<div class="texture-item texture-select">
    						<figure><img src="img/custom/texture2.png" alt="熊掌模型"></figure>
    						<p>熊掌模型</p>
    					</div></label>
    				</div>
    				<div class="select-item select-item-4">
                        <label for="texture3">
    					<div class="texture-item texture-select">
    						<figure><img src="img/custom/texture3.png" alt="兔兔模型"></figure>
    						<p>兔兔模型</p>
    					</div></label>
    				</div>
    				<div class="select-item select-item-4">
                        <label for="texture4">
    					<div class="texture-item texture-select">
    						<figure><img src="img/custom/texture4.png" alt="火箭模型"></figure>
    						<p>火箭模型</p>
    					</div></label>
    				</div>
    			</div>
            </div>


            <div class="flow">
                <div class="aside-title">
                    <h2>選擇基底水果</h2>
                </div>
                <div class="aside-select">
                    <div class="select-item select-item-6 select-item-4">
                        <label for="option1">
                            <div class="fruite-item texture-item">
                                <figure><img src="img/greenapple.png" alt="青蘋果"></figure>
                                <p>青蘋果</p>
                            </div>
                        </label>
                    </div>
                    <div class="select-item select-item-6 select-item-4">
                        <label for="option2">
                        <div class="fruite-item texture-item">
                            <figure><img src="img/banana.png" alt="香蕉"></figure>
                            <p>香蕉</p>
                        </div></label>
                    </div>
                    <div class="select-item select-item-6 select-item-4">
                        <label for="option3">
                        <div class="fruite-item texture-item">
                            <figure><img src="img/blueberry.png" alt="藍莓"></figure>
                            <p>藍莓</p>
                        </div></label>
                    </div>
                    <div class="select-item select-item-6 select-item-4">
                        <label for="option4">
                        <div class="fruite-item texture-item">
                            <figure><img src="img/orange.png" alt="橘子"></figure>
                            <p>橘子</p>
                        </div></label>
                    </div>
                    <div class="select-item select-item-6 select-item-4">
                        <label for="option5">
                        <div class="fruite-item texture-item">
                            <figure><img src="img/grape.png" alt="葡萄"></figure>
                            <p>葡萄</p>
                        </div></label>
                    </div>
                    <div class="select-item select-item-6 select-item-4">
                        <label for="option6">
                        <div class="fruite-item texture-item">
                            <figure><img src="img/streberry.png" alt="草莓"></figure>
                            <p>草莓</p>
                        </div></label>
                    </div>
                </div>
                <div class="range-area">
                    <div class="gradual">
                        <div class="gradual-group">
                            <div class="gradual-item"><img></div>
                            <div class="gradual-item"><img></div>
                        </div>
                        <div class="gradual-range">
                            <label for="range">
                                <input type="range" min="0" max="100" value="50" id="range">
                            </label>
                        </div>
                    </div>
                    <div class="range-angle">
                        <label for="angle">
                            角度:
                        <input type="number" min="0" max="360" value="90" id="angle">°</label>
                    </div>
                </div>
            </div>


            <div class="flow">
                <div class="aside-title">
                    <h2>選擇水果切片</h2>
                </div>
                <div class="aside-select">
                    <div class="select-item select-item-4 select-item-6">
                        <label for="fruite-slice1">
                        <div class="texture-item slice-item">
                            <figure><img src="img/chocolate.png" alt="巧克力"></figure>
                            <p>巧克力</p>
                        </div></label>
                    </div>
                    <div class="select-item select-item-4 select-item-6">
                        <label for="fruite-slice2">
                        <div class="texture-item slice-item">
                            <figure><img src="img/bittergourd.png" alt="苦瓜"></figure>
                            <p>苦瓜</p>
                        </div></label>
                    </div>
                    <div class="select-item select-item-4 select-item-6">
                        <label for="fruite-slice3">
                        <div class="texture-item slice-item">
                            <figure><img src="img/saltedplum.png" alt="酸梅"></figure>
                            <p>酸梅</p>
                        </div></label>
                    </div>
                    <div class="select-item select-item-4 select-item-6">
                        <label for="fruite-slice4">
                        <div class="texture-item slice-item">
                            <figure><img src="img/Roselle.png" alt="洛神花"></figure>
                            <p>洛神花</p>
                        </div></label>
                    </div>
                    <div class="location-btn-group">
                        <div class="location-btn-item"><button type="button" class="operate" id="slice-bigger"><i class="fas fa-search-plus"></i></button></div>
                        <div class="location-btn-item"><button type="button" class="operate" id="slice-smaller"><i class="fas fa-search-minus"></i></button></div>
                    </div>
                </div>
            </div>


            <div class="flow">
                <div class="aside-title">
                    <h2>輸入冰棒小語</h2>
                </div>
                <div class="aside-select message-pull">
                    <div class="select-item select-item-1">
                        <label for="text">
                        <input type="text" maxlength="5" v-model="message" id="text"></label>
                    </div>
                </div>
            </div>
    		<div class="aside-button-group">
                <div class="custom-box">
                    <form>
                        <input type="radio" name="texture" value="ice" id="texture1">
                        <input type="radio" name="texture" value="bear" id="texture2">
                        <input type="radio" name="texture" value="rabbit" id="texture3">
                        <input type="radio" name="texture" value="rocky" id="texture4">
                        <input type="checkbox" name="fruite[]" value="greenapple" id="option1">
                        <input type="checkbox" name="fruite[]" value="banana" id="option2">
                        <input type="checkbox" name="fruite[]" value="blueberry" id="option3">
                        <input type="checkbox" name="fruite[]" value="orange" id="option4">
                        <input type="checkbox" name="fruite[]" value="grapes" id="option5">
                        <input type="checkbox" name="fruite[]" value="streberry" id="option6">
                        <input type="radio" name="fruite-slice" value="chocolate" id="fruite-slice1">
                        <input type="radio" name="fruite-slice" value="bittergourd" id="fruite-slice2">
                        <input type="radio" name="fruite-slice" value="saltedplum" id="fruite-slice3">
                        <input type="radio" name="fruite-slice" value="Roselle" id="fruite-slice4">
                    </form>
                </div>
				<div class="aside-button" id="last">
					<a class="aside-button-out-last">
						<span class="aside-button-in">上一步</span>
					 </a>
				</div>

                <div class="aside-button" id="none-last">
                    <a class="aside-button-out-last">
                        <span class="aside-button-in">上一步</span>
                     </a>
                </div>
				<div class="aside-button" id="next">
					<a class="aside-button-out-next">
						<span class="aside-button-in">下一步</span>
					 </a>
				</div>
                <div class="aside-button" id="complete-all">
                    <a class="aside-button-out-complete">
                    <span class="aside-button-in">完成</span>
                    </a>
                </div>
    		</div>
		</section>
        <section class="pop" id="pop">
            <div class="pop-area">
            <span class="close" id="close-pop">
                <img src="img/pop-close.png" alt="關閉視窗">
            </span>
                <h2>製作完成</h2>
                <div class="btn-item">
                    <a class="cart-btn" href="writemessage.php">
                        <span class="cart-btn-in">放入購物車</span>
                    </a>
                </div>
                <div class="btn-item">
                    <a class="message-btn" href="writemessage.php">
                        <span class="message-btn-in">我要留言</span>
                    </a>
                </div>
                <div class="btn-item">
                    <a class="reset-btn">
                        <span class="reset-btn-in">重作一個</span>
                     </a>
                </div>
            </div>
        </section>
	</div>
    <canvas width="400px" height="500px" id="canvas"></canvas>
	<footer>
		<span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
	</footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/nav.js"></script>
    <script src="js/vue.js"></script>
	<script src="js/custom.js"></script>
    <script src="js/custom-img.js"></script>
    <script src="js/custom-pop.js"></script>
    <script>
        new Vue({
            el:'#app',
            data:{
                message:'輸入字',
            },
            methods:{
            },
            computed:{
            },
        });
    </script>
</body>
</html>