$(document).ready(function() {
	var fruitexhr = new XMLHttpRequest();
	fruitexhr.addEventListener('load',function() {
		if (fruitexhr.status == 200) {
			fruitepush(fruitexhr.responseText);
		}else {
			alert(fruitexhr.status);
		}
	})
	var fruiteurl = "../custom-search.php?category=fruite";
	fruitexhr.open("Get",fruiteurl,true);
	fruitexhr.send();
	var slicexhr = new XMLHttpRequest();
	slicexhr.addEventListener('load',function() {
		if (slicexhr.status == 200) {
			slicepush(slicexhr.responseText);
		}else{
			alert(slicexhr.status);
		}
	})
	var sliceurl = "../custom-search.php?category=slice";
	slicexhr.open("Get",sliceurl,true);
	slicexhr.send()
});

function fruitepush(str) {
	for (var i = 0; i < JSON.parse(str).length; i++) {
		fruiteQuality[i]=[JSON.parse(str)[i][0],JSON.parse(str)[i][1],JSON.parse(str)[i][2]];
	}
	for (var i = 0; i < JSON.parse(str).length; i++) {
		fruitePrice.push(parseInt(JSON.parse(str)[i][3]));
	}
	console.log(fruitePrice);
}
function slicepush(str) {
	for (var i = 0; i < JSON.parse(str).length; i++) {
		sliceQuality[i]=[JSON.parse(str)[i][0],JSON.parse(str)[i][1],JSON.parse(str)[i][2]];
	}
	for (var i = 0; i < JSON.parse(str).length; i++) {
		slicePrice.push(parseInt(JSON.parse(str)[i][3]));
	}
	console.log(slicePrice);
}