<?php 
session_start();
$path = $_REQUEST['img'];
$_SESSION["cart"]['201']=array('prod_name' => '客製冰棒','prod_price'=>'',"prod_pic"=>$path,'qty'=>'1');
echo $path;
 ?>