<?php
include("connect.php");
$id = $_GET["id"];
$sql = "DELETE FROM vesti WHERE id = '$id'";
mysqli_query($conn,$sql);
header("Location: controlp.php");
?>