window.addEvenetListener("load",function(){
	function sendReply(e){
	  let replyContent = e.target.form.getElementsByTagName("input")[0].value;

	  //產生XMLHttpRequest物件
	  var xhr = new XMLHttpRequest();

	  //註冊callback function
	  xhr.onload = function(){
	      if( xhr.status == 200 ){ //正常的處理完畢
	        //複製一包, 將登入者的姓名,日期,conten 
			
	      }else{
	        alert(xhr.status);
	      }
	  }

	  //設定好所要連結的程式
	  url = "insertReply.php?replyContent=" + replyContent;

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


