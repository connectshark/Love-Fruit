window.addEvenetListener("load",function(){
	function sendReply(e){
	  let replyContent = e.target.form.getElementsByTagName("input")[0].value;
	  msgno=$('.msgno').eq($(this).index('.msgno')).text();
	  
	  //產生XMLHttpRequest物件
	  var xhr = new XMLHttpRequest();

	  function $id(id){
		return document.getElementById(id);
	  }

	  //註冊callback function
	  xhr.onload = function (){
		let allMessage = $id("all-message");
		let spotTemplate = document.querySelector("#spotPack");
		let newSpot = spotTemplate.cloneNode(true);
		var content = $id("content");
　　　  
		
	
		// myForm.insertBefore(newSpot, btnSend)
	      if( xhr.status == 200 ){ //正常的處理完畢
	        //複製一包, 將登入者的姓名,日期,conten 
			// xhr.responseText;接echo的訊息
			newSpot.style.display = "";
			document.allMessage.appendChild(newSpot);
			content.innerHTML = xhr.responsText;
	      }else{
	        alert(xhr.status);
	      }
	  }

	  //設定好所要連結的程式
	  url = "insertReply.php?replyContent=" + replyContent+ "&msg_no="+ msgno;

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
},false);


