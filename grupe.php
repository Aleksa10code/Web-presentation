<?php include("head.php"); ?>

<style>
.traka{width:1240px; height:40px; line-height:40px; text-align:center; color:#fff; background:#272b34; border-radius:10px; margin:10px auto; font-weight:bold; font-size:24px;}
.telo{width:1280px; min-height:400px; margin:20px auto;}

.prikaz{display:block; text-decoration:none; color:#fff; width:220px; height:300px; float:left; margin:10px; border-radius:10px; border:solid 2px #f00; position:relative; overflow:hidden;}
.prikaz img{width:220px; height:300px; object-fit:cover;}
.prikaz div{width:220px; height:50px; position:absolute; bottom:0; background:#000; opacity:0.7; padding:5px; font-size:20px;}
</style>

<!-- traka poruka -->
<div class="traka">
<?php
$grupa = $_GET["grupa"];
echo $grupa;
?>
</div>

<!-- telo -->
<div class="telo">

<!-- manga epizode -->
<div style="width:1200px; margin:20px auto;">
<?php
$sql = "SELECT * FROM epizode WHERE tip = '$grupa' ";
$upit = mysqli_query($conn,$sql);
while($red = mysqli_fetch_assoc($upit)) { ?>

<a href="prikaz.php?id=<?=$red["id"]?>" class="prikaz">
<img src="<?=$red["slika"]?>">
<div><?=$red["naziv"]?></div>
</a>
<?php } ?>
<div style="clear:both;"></div>
</div>

</div>
<!-- telo end -->












<?php include("futer.php"); ?>