<?php include("head.php"); ?>

<style>
.traka{width:1240px; height:40px; line-height:40px; text-align:center; color:#fff; background:#272b34; border-radius:10px; margin:10px auto; font-size:18px; font-weight:bold;}
.telo{width:1280px; min-height:400px; margin:20px auto; border:solid 1px #fff;}

</style>

<!-- traka poruka -->
<div class="traka" style="font-size:18px;">
MANGA
</div>

<!-- telo -->
<div class="telo">

<!-- manga epizode -->
<style>
.prikaz{display:block; text-decoration:none; color:#fff; width:200px; height:300px; float:left; margin:10px; border-radius:10px; border:solid 1px #ff0; position:relative;}
.prikaz img{width:200px; height:300px; object-fit:cover;}
.prikaz div{width:200px; height:50px; position:absolute; bottom:0; background:#111; opacity:0.6; font-size:16px; padding:5px;}
</style>

<div style="width:1200px; margin:20px auto; border:solid 1px #09F;">
<?php
$sql = "SELECT * FROM epizode WHERE tip = 'Mange' ";
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