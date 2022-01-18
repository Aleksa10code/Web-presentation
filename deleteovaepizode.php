<?php
include("connect.php");
$id = $_GET["id"];
$sql = "SELECT * FROM ovaepizode WHERE id = '$id'";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit);

unlink($red["slika"]);

$sql = "DELETE FROM ovaepizode WHERE id = '$id'";
mysqli_query($conn,$sql);
header("Location: controlp.php#ovaepizode");
?>