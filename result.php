<?php

$uname = $_POST["uname"];
$pwd = $_POST["pwd"];

if($uname=="hndy" && $pwd=="passwd") {
    $_SESSION["user"] =$uname;
    header("Location: master.php");
} else {
    session_unset();
	session_destroy();
    echo "Login Gagal!";
}

?>