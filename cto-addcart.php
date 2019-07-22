<?php 
session_start();
$path = $_REQUEST['img'];
$price = $_REQUEST['price'];
$_SESSION["cart"]['201']=array('prod_name' => '客製冰棒','prod_price'=>$price,"prod_pic"=>$path,'qty'=>'1');
 ?>