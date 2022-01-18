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
$mangal = $_GET["mangal"];
$poglavlja = $_GET["poglavlja"];

$sql = "SELECT * FROM mange WHERE naziv='$mangal' AND poglavlja = '$poglavlja' ORDER BY poglavlja";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit);
echo $red["mangal"];
?>
</div>

<!-- telo -->
<div class="telo">

<div style="width:1200px; margin:20px auto; padding:20px; color:#fff; white-space:pre-wrap;">
<img src="<?=$red["slika1"]?>" style="width:300px; height:350px; margin:0 20px; float:left; object-fit:cover; border-radius:10px; border:solid 2px #f00;">
<span style="color:#00f; font-size:20px;"><?=$red["mangal"]?></span><br>
Tip: <?=$red["tip"]?><br>
Datum emotivanja: <?=$red["datum"]?><br>
Trajanje: <?=$red["trajanje"]?><br>
Opis: <br><?=$red["opis"]?>

<div style="clear:both;"></div>
</div>

<div style="width:1200px; margin:20px auto; font-size:36px; font-weight:bold; background:#fff; padding:10px 5px 5px 5px; color:#222; border-radius:15px; text-align:center;">
<?=$red["naziv"]?> - POGLAVLJE <?=$red["poglavlja"]?><br><hr>

<?php for($x=1;$x<=100;$x++){ 
if($red["slika".$x]){
?>

<img src="<?php echo $red["slika".$x]; ?>" style="max-width:800px;"><br>
<?php }} ?>
</div>

<?php
$ser = $red["naziv"];
$sqlp = "SELECT * FROM mange WHERE poglavlja < '$poglavlja' AND naziv = '$ser' ORDER BY poglavlja DESC";
$upitp = mysqli_query($conn,$sqlp);
$redp = mysqli_fetch_assoc($upitp);

$sqln = "SELECT * FROM mange WHERE poglavlja > '$poglavlja' AND naziv = '$ser' ORDER BY poglavlja";
$upitn = mysqli_query($conn,$sqln);
$redn = mysqli_fetch_assoc($upitn);
?>

<div style="width:1200px; margin:10px auto; background:#2c2e36; border-radius:15px; font-size:20px; font-weight:bold; text-align:center;">
<?php
if($redp["id"]==""){} else{ ?>
<a style="color:#fff; text-decoration:none;" href="mangalepizode.php?mangal=<?=$mangal?>&poglavlja=<?=$redp["poglavlja"]?>">PRETHODNO POGLAVLJE</a> - 
<?php } ?> 


<?php
if($redn["id"]==""){} else{ ?>
<a style="color:#fff; text-decoration:none;" href="mangalepizode.php?mangal=<?=$mangal?>&poglavlja=<?=$redn["poglavlja"]?>">SLEDEĆE POGLAVLJE</a>
<?php } ?> 
</div>

</div>
<!-- telo end -->

<?php include("futer.php"); ?>