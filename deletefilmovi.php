<?php
include("connect.php");
$id = $_GET["id"];
$sql = "SELECT * FROM filmovi WHERE id = '$id'";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit);

unlink($red["slika"]);

$sql = "DELETE FROM filmovi WHERE id = '$id'";
mysqli_query($conn,$sql);
header("Location: controlp.php#film");
?>