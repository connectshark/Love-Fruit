<?php
session_start();
echo $_SESSION["mem_id"];
if (isset($_SESSION["mem_id"]) == true) {
    echo $_SESSION["mem_name"];
} else {
    echo "notLogin";
}
