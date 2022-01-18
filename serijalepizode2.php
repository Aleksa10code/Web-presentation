<?php include("head.php"); ?>

<style>
.traka{width:1240px; height:40px; line-height:40px; text-align:center; color:#fff; background:#272b34; border-radius:10px; margin:10px auto; font-size:18px; font-weight:bold;}
.telo{width:1280px; min-height:400px; margin:20px auto;}
.prikaz{display:block; text-decoration:none; color:#fff; width:220px; height:300px; float:left; margin:10px; border-radius:10px; border:solid 2px #f00; position:relative; overflow:hidden;}
.prikaz img{width:220px; height:300px; object-fit:cover;}
.prikaz div{width:220px; height:50px; position:absolute; bottom:0; background:#000; opacity:0.7; padding:5px; font-size:20px;}
</style>

<!-- traka poruka -->
<div class="traka" style="font-size:24px;">
<?php
$serijal = $_GET["serijal"];
$epizoda = $_GET["epizoda"];
$sql = "SELECT * FROM epizode WHERE serijal='$serijal' AND epizoda = '$epizoda' ORDER BY serijal";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit);
echo $red["serijal"];
?>
</div>

<!-- telo -->
<div class="telo">

<div style="width:1200px; margin:20px auto; padding:20px; color:#fff; white-space:pre-wrap;">

<img src="<?=$red["slika"]?>" style="width:300px; height:350px; margin:0 20px; float:left; object-fit:cover; border-radius:10px; border:solid 2px #f00;">
<span style="color:#00f; font-size:20px;"><?=$red["serijal"]?></span><br>
<?=$red["tip"]?><br>
<?=$red["datumemitovanja"]?><br>
<?=$red["trajanje"]?><br>
<?=$red["opis"]?>

<div style="clear:both;"></div>
</div>

<div style="width:1200px; margin:20px auto; font-size:18px; font-weight:bold; background:#2c2e36; padding:5px; color:#fff; border-radius:15px; text-align:center;">
<?=$red["epizoda"]?> <?=$red["naziv"]?>
</div>

<div style="width:1200px; margin:auto; text-align:center;">
<?=$red["link"]?>
</div>

<?php
$ser = $red["serijal"];
$sqlp = "SELECT * FROM epizode WHERE epizoda < '$epizoda' AND serijal = '$ser' ORDER BY epizoda DESC";
$upitp = mysqli_query($conn,$sqlp);
$redp = mysqli_fetch_assoc($upitp);

$sqln = "SELECT * FROM epizode WHERE epizoda > '$epizoda' AND serijal = '$ser' ORDER BY epizoda";
$upitn = mysqli_query($conn,$sqln);
$redn = mysqli_fetch_assoc($upitn);
?>

<div style="width:1200px; margin:10px auto; background:#2c2e36; border-radius:15px; font-size:20px; font-weight:bold; text-align:center;">
<?php
if($redp["id"]==""){} else{ ?>
<a style="color:#fff; text-decoration:none;" href="serijalepizode.php?serijal=<?=$serijal?>&epizoda=<?=$redp["epizoda"]?>">PRETHODNA EPIZODA</a> - 
<?php } ?> 


<?php
if($redn["id"]==""){} else{ ?>
<a style="color:#fff; text-decoration:none;" href="serijalepizode.php?serijal=<?=$serijal?>&epizoda=<?=$redn["epizoda"]?>">SLEDECA EPIZODA</a>
<?php } ?> 
</div>

</div>
<!-- telo end -->

<?php include("futer.php"); ?>