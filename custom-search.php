<?php 
$errMsg="";
try {
    require_once("connect-dd101g3.php");
    switch ($_REQUEST['category']) {
    	case 'fruite':
	    	$sql = "SELECT fruit_sour, fruit_sweet, fruit_bitter, fruit_price, fruite_color FROM fruit_base WHERE fruit_state = 1 ";
	    	$fruite = $pdo->query($sql);
	    	$fruite = $fruite->fetchAll();
	    	echo json_encode($fruite);
    		break;
    	case 'slice':
    		$sql = "SELECT ii_sour,ii_sweet,ii_bitter,ii_price FROM ingredients WHERE ii_state = 1";
	    	$slice = $pdo->query($sql);
	    	$slice = $slice->fetchAll();
	    	echo json_encode($slice);
    		break;
    	
    }
    
} catch (PDOException $e) {
    $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
	$errMsg .= "行數:". $e->getLine()."<br>";
	echo $errMsg;
}

 ?>