<?php
include("connect.php");
$id = $_GET["id"];
$sql = "SELECT * FROM mange WHERE id = '$id'";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit);

for($x=1;$x<=100;$x++){
	
if($red["slika".$x]){	
unlink($red["slika".$x]);}
}

$sql = "DELETE FROM mange WHERE id = '$id'";
mysqli_query($conn,$sql);
header("Location: controlp.php");
?>