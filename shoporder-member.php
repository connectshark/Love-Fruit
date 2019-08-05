<?php
session_start();
// echo json_encode($_SESSION["cart"]);


// $_SESSION["email"]+$_SESSION["email"]+$_SESSION["phone"]+$_SESSION["adress"];
// $_Session["email"].ToString();

$member = array();
array_push($member,$_SESSION["email"],$_SESSION["mem_name"]);
// echo print_r($member);
echo json_encode($member);
// string[]str = new string[] {"aaa","bbb","ccc"};
// $_Session["email"] = str;











?>