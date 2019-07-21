window.addEventListener("load",function(){
	function sendReply(e){
	  let replyContent = e.target.form.getElementsByTagName("input")[0].value;
	  let msgno=$('.msgno').eq($(this).index('.btn-add')).text();
	  let allMessage=$(this).index('.btn-add');
	 
	  //產生XMLHttpRequest物件
	  var xhr = new XMLHttpRequest();

	  function $id(id){
		return document.getElementById(id);
	  }

	  //註冊callback function
	  xhr.onload = function (){
		// let allMessage = $id("all-message");
		let today = new Date();
		// myForm.insertBefore(newSpot, btnSend)
	      if( xhr.status == 200 ){ //正常的處理完畢
	        //複製一包, 將登入者的姓名,日期,conten 
			// xhr.responseText;接echo的訊息
			// alert(xhr.responseText);
			spot = document.getElementById('spotPack');
			
			newSpot = spot.cloneNode(true);
			newSpot.style.display = "";
			// newSpot.querySelector(".name").innerText = member.name;
			newSpot.querySelector(".time").innerText = today.getFullYear()+"-"+today.getMonth()+"-"+today.getDate() ;
			newSpot.querySelector(".text").innerText = replyContent;
			document.getElementsByClassName('all-message')[allMessage].appendChild(newSpot);
		
	      }else{
	        alert(xhr.status);
	      }
	  }

	  //設定好所要連結的程式
	  url = "insertReply.php?reply_content=" + replyContent+ "&msg_no="+ msgno;

	  console.log( url);
	  xhr.open("get", url, true);
	  //送出資料
	  xhr.send(null);

	}
	//..........btnReply
	
	let btnReplys = document.getElementsByName("btnReply");
    for(let i=0; i<btnReplys.length; i++){
    	btnReplys[i].onclick = sendReply;
	}
	
	$(".all-message").on("mouseenter mouseleave", function (event) { //挷定滑鼠進入及離開事件
		if (event.type == "mouseenter") {
		  $(this).css({"overflow-y": "scroll"}); //滑鼠進入

		} else {
		  $(this).scrollTop(0).css({"overflow-y": "hidden"}); //滑鼠離開
		}
	  });
},false);


