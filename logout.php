<?php
session_start();
unset($_SESSION["user"]);
setcookie("zapamti","",time() - 3600,"/");
header("Location: controlp.php");
?>



