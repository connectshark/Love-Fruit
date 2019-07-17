<?php 
try {
    $dsn="mysql:host=localhost;port=3306;dbname=dd101g3;charset=utf8";
    $user = "root";
    $psw = "root";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn , $user , $psw, $options );
    switch ($_REQUEST['category']) {
    	case 'fruite':
	    	$sql = "SELECT fruit_sour, fruit_sweet, fruit_bitter,fruit_price FROM fruit_base";
	    	$fruite = $pdo->query($sql);
	    	$fruite = $fruite->fetchAll();
	    	echo json_encode($fruite);
    		break;
    	case 'slice':
    		$sql = "SELECT ii_sour,ii_sweet,ii_bitter,ii_price FROM ingredients";
	    	$slice = $pdo->query($sql);
	    	$slice = $slice->fetchAll();
	    	echo json_encode($slice);
    		break;
    	
    }
    
} catch (PDOException $e) {
    $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
    $errMsg .= "行數:". $e->getLine()."<br>";
}

 ?>