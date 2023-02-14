<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: Login.php");

setcookie('id', '', time() - 3600);
setcookie('key', '', - 3600 );
exit;


?>