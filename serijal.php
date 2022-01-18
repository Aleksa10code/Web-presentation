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
.epizode a{display:block; width:140px; height:50px; line-height:50px; margin:10px; text-decoration:none; text-align:center; float:left; color:#fff; background:#2c2f36; border-radius:15px; transition:all 0.5s;}
.epizode a:hover{transition:all 0.5s; color:#1a7ae1;}
</style>
<!-- traka poruka -->
<div class="traka">
<?php
$serijal = $_GET["serijal"];
echo $serijal;
?>
</div>

<?php
if($_GET["serijal"] == "Zmajeva kugla"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><a href="https://www.youtube.com/channel/UCEZ0c1HSOBxkdV4Ujzd02dA" target="new"><img style="width:1200px; height:200px; object-fit:cover; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 1.jpg"></a></div>';}

if($_GET["serijal"] == "Zmajeva kugla z"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><a href="https://www.youtube.com/channel/UCunMKgnjgPrY1RxXtKHU53Q" target="new"><img style="width:1200px; height:200px; object-fit:cover; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 2.png"></a></div>';}

if($_GET["serijal"] == "Zmajeva kugla gt"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><a href="https://www.youtube.com/channel/UCMdp-jYx29u2WQJkfoetmuA" target="new"><img style="width:1200px; height:200px; object-fit:cover; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 3.jpg"></a></div>';}

if($_GET["serijal"] == "Zmajeva kugla super"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><a href="https://www.youtube.com/channel/UC-ZvEWo2l9qMfojRQQwu6jA" target="new"><img style="width:1200px; height:200px; object-fit:fill; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 4.png"></a></div>';}

if($_GET["serijal"] == "Zmajeva kugla heroji"){echo '<div style="position:absolute; left:calc(50% - 600px); top:150px;"><a href="https://www.youtube.com/channel/UCl8Q7CudpIPJ-_C3_l3blrg" target="new"><img style="width:1200px; height:200px; object-fit:cover; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 5.jpg"></a></div>';}
?>

<!-- telo -->
<div class="telo">

<div style="width:1200px; margin:240px auto 50px auto; padding:20px; color:#fff; white-space:pre-wrap; position:relative;">
<?php
$sql = "SELECT * FROM epizode WHERE serijal = '$serijal' ORDER BY epizoda";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit);
?>

<img src="<?=$red["slika"]?>" style="width:300px; height:350px; margin:0 20px; float:left; object-fit:cover; border-radius:10px; border:solid 2px #f00;">
<span style="color:#137ab1; font-size:20px;"><?=$red["serijal"]?></span><br>
<?=$red["tip"]?><br>
<?=$red["datumemitovanja"]?><br>
<?=$red["trajanje"]?><br>
<?=$red["opis"]?>

<div style="clear:both;"></div>
</div>

<div class="trakaepizode">
EPIZODE
</div>

<div class="epizode">
<?php
$sql2 = "SELECT * FROM epizode WHERE serijal = '$serijal' ORDER BY epizoda";
$upit2 = mysqli_query($conn,$sql2);
while($red2 = mysqli_fetch_assoc($upit2)) { ?>
<a href="serijalepizode.php?serijal=<?=$serijal?>&epizoda=<?=$red2["epizoda"]?>">Epizoda br. <?=$red2["epizoda"]?></a>
<?php } ?>
</div>

</div>
<!-- telo end -->

<?php include("futer.php"); ?>