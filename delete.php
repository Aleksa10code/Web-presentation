<?php
include("connect.php");
$id = $_GET["id"];
$sql = "SELECT * FROM epizode WHERE id = '$id'";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit);
if(file_exists($red["slika"])){
unlink($red["slika"]);}
$sql = "DELETE FROM epizode WHERE id = '$id'";
mysqli_query($conn,$sql);
header("Location: controlp.php");
?>