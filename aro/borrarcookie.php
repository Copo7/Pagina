<?php
$cookie=$_GET['cookie'];

setcookie($cookie, '', time()-3600);

header("Location: index.php");
?>