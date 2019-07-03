var nowFlow = 1;
function flowChange(now) {
	if (now < 1) {
		now = 1;
		nowFlow = 1;
	} else if(now > flow.length) {
		now = flow.length;
		nowFlow = flow.length;
	}
	for (let i = 0; i < flow.length; i++) {
		flow[i].style.display = 'none';
	}
	flow[now-1].style.display = 'block';
}
function stepChange(now){
	for (let i = 0; i < step.length; i++) {
		step[i].classList.remove('active');
	}
	step[now-1].classList.add('active');
}




function lastChange() {
	nowFlow--;
	if (nowFlow < 1) {
		nowFlow = 1;
	} else if(nowFlow > flow.length) {
		nowFlow = flow.length;
	}
	flowChange(nowFlow);
	stepChange(nowFlow);
}
function nextChange() {
	nowFlow++;
	if (nowFlow < 1) {
		nowFlow = 1;
	} else if(nowFlow > flow.length) {
		nowFlow = flow.length;
	}
	flowChange(nowFlow);
	stepChange(nowFlow);
}

function imgChange(e){
	var src = document.querySelector(`${e.target} > img`).src;
	console.log(src);
}
function doFirst(){
	last = document.getElementById('last');
	next = document.getElementById('next');
	step = document.getElementsByClassName('step-item');
	texture = document.getElementsByClassName('texture-item')
	last.addEventListener('click',lastChange);
	next.addEventListener('click',nextChange);
	flow = document.getElementsByClassName('flow');
	for (var i = 0; i < texture.length; i++) {
		texture[i].addEventListener('click',imgChange);
	}
	flowChange(nowFlow);
	stepChange(nowFlow);
}
window.addEventListener('load',doFirst);