<?php

session_start();
if(isset($_SESSION["user"])) {
    echo"Login Berhasil!" .$_SESSION["user"] ."<br>";
    echo "<a href= 'logout.php'> Logout</a>";
} else {
    session_unset();
	session_destroy();
    echo"Login Gagal!";
}

?>