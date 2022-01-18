<?php
include("connect.php");
$tip = $_POST["tip"];
$serijal = $_POST["serijal"];
$epizoda = $_POST["epizoda"];
$naziv = $_POST["naziv"];
$link = $_POST["link"];
$opis = $_POST["opis"];
$trajanje = $_POST["trajanje"];
$datumemitovanja = $_POST["datumemitovanja"];


if(!empty($_FILES["slika"]["name"])) {
$niz=explode(".",$_FILES["slika"]["name"]);
$ext=$niz[1];	
$slika="slike/".time()."1.".$ext;
move_uploaded_file($_FILES["slika"]["tmp_name"],$slika);}
else {$slika="";}


$sql="INSERT INTO epizode (tip, serijal, epizoda, naziv, link, slika, opis, trajanje, datumemitovanja) VALUES ('$tip', '$serijal', '$epizoda', '$naziv', '$link', '$slika', '$opis', '$trajanje', '$datumemitovanja')";
mysqli_query($conn,$sql);
header("Location: controlp.php");
?>