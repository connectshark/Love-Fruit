<?php 
session_start();
if (isset($_SESSION['mem_no']) === true) {
	echo true;
}else{
	echo false;
}
 ?>
