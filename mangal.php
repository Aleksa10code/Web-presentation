<?php include("head.php"); ?>

<style>
.traka{width:1240px; height:40px; line-height:40px; text-align:center; color:#fff; background:#272b34; border-radius:10px; margin:10px auto; font-size:24px; font-weight:bold;}
.telo{width:1280px; min-height:400px; margin:20px auto; position:relative;}
.prikaz{display:block; text-decoration:none; color:#fff; width:220px; height:300px; float:left; margin:10px; border-radius:10px; border:solid 2px #f00; position:relative; overflow:hidden;}
.prikaz img{width:220px; height:300px; object-fit:cover;}
.prikaz div{width:220px; height:50px; position:absolute; bottom:0; background:#000; opacity:0.7; padding:5px; font-size:20px;}

.trakaepizode{width:1200px; margin:20px auto; font-size:18px; font-weight:bold; background:#21232a; border-radius:10px; padding:5px 5px 5px 10px; color:#fff;}

.epizode{width:1200px; margin:20px auto; font-size:18px; font-weight:bold; background:#22242a; padding:20px; color:#fff; border-radius:15px;}
.epizode::after{clear:both; display:table; content:"";}
.epizode a{display:block; width:150px; height:50px; line-height:50px; margin:10px; text-decoration:none; text-align:center; float:left; color:#fff; background:#2c2f36; border-radius:15px; transition:all 0.5s;}
.epizode a:hover{transition:all 0.5s; color:#1a7ae1;}
</style>
<!-- traka poruka -->
<div class="traka">
<?php
$mangal = $_GET["mangal"];
echo $mangal;
?>
</div>

<?php
if($_GET["mangal"] == "ZMAJEVA KUGLA"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><img style="width:1200px; height:200px; object-fit:cover; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 1.jpg"></div>';}

if($_GET["mangal"] == "ZMAJEVA KUGLA Z"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><img style="width:1200px; height:200px; object-fit:cover; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 2.png"></div>';}

if($_GET["mangal"] == "ZMAJEVA KUGLA GT"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><img style="width:1200px; height:200px; object-fit:cover; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 3.jpg"></div>';}

if($_GET["mangal"] == "ZMAJEVA KUGLA SUPER"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><img style="width:1200px; height:200px; object-fit:fill; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 4.png"></div>';}

if($_GET["mangal"] == "ZMAJEVA KUGLA AF"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><img style="width:1200px; height:200px; object-fit:cover; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 5.jpg"></div>';}

if($_GET["mangal"] == "ZMAJEVA KUGLA HEROJI"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><img style="width:1200px; height:200px; object-fit:cover; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 5.jpg"></div>';}
?>

<!-- telo -->
<div class="telo">

<div style="width:1200px; margin:240px auto 50px auto; padding:20px; color:#fff; white-space:pre-wrap; position:relative;">
<?php
$sql = "SELECT * FROM mange WHERE naziv = '$mangal'";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit);
?>

<img src="<?=$red["slika1"]?>" style="width:300px; height:350px; margin:0 20px; float:left; object-fit:cover; border-radius:10px; border:solid 2px #f00;">
<span style="color:#137ab1; font-size:20px;"><?=$red["naziv"]?></span><br>
<?=$red["tip"]?><br>
Datum emitovanja: <?=$red["datum"]?><br>
Trajanje: <?=$red["trajanje"]?><br>
Opis: <?=$red["opis"]?>
<div style="clear:both;"></div>
</div>

<div class="trakaepizode">
POGLAVLJA
</div>

<div class="epizode">
<?php
$sql2 = "SELECT * FROM mange WHERE naziv = '$mangal'";
$upit2 = mysqli_query($conn,$sql2);
while($red2 = mysqli_fetch_assoc($upit2)) { ?>
<a href="mangalepizode.php?mangal=<?=$mangal?>&poglavlja=<?=$red2["poglavlja"]?>">Poglavlje br. <?=$red2["poglavlja"]?></a>
<?php } ?>
</div>

</div>
<!-- telo end -->

<?php include("futer.php"); ?>