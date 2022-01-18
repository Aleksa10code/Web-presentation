<?php
include("connect.php");
$tip = $_POST["tip"];
$red = $_POST["red"];
$naziv = $_POST["naziv"];
$link = $_POST["link"];
$opis = $_POST["opis"];
$trajanje = $_POST["trajanje"];
$datum = $_POST["datum"];

if(!empty($_FILES["slika"]["name"])) {
$niz=explode(".",$_FILES["slika"]["name"]);
$ext=$niz[1];	
$slika="specijali/".time()."1.".$ext;
move_uploaded_file($_FILES["slika"]["tmp_name"],$slika);}
else {$slika="";}


$sql="INSERT INTO specijali (tip, red, naziv, link, slika, opis, trajanje, datum) VALUES ('$tip', '$red', '$naziv', '$link', '$slika', '$opis', '$trajanje', '$datum')";
mysqli_query($conn,$sql);
header("Location: controlp.php#specijal");
?>