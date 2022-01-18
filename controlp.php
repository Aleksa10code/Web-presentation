<?php include("controlp-head.php"); ?>
<style>
.nosac{width:1200px; margin:20px auto;}
.nosac::after{clear:both; display:table; content:"";}
.art{float:left; width:150px; height:200px; margin:10px; border:solid 2px #f00; position:relative; overflow:hidden; border-radius:15px;} 
.art img{width:150px; height:150px; object-fit:cover;}
.art div{width:150px; height:50px; position:absolute; bottom:0; color:#fff; background:#000; opacity:0.6; padding:5px;}
.art a{display:block; text-decoration:none; width:70px; height:20px; line-height:20px; text-align:center; font-size:14px; color:#fff; background:#f00; position:absolute; bottom:0; right:0;}
.art a:hover{background:#00f;}

</style>

<!--TELO-->
<div class="nosac">
<h1 style="text-align:center; font-size:40px; color:#444;">OVDE MOZETE OBRISATI CRTANI FILM</h1>
<?php
$sql = "SELECT * FROM epizode GROUP BY serijal";
$upit = mysqli_query($conn,$sql);
while($red = mysqli_fetch_assoc($upit)) { ?>

<h2><?=$red["serijal"]?></h2>
<div style="width:100%;">
<?php 
$serijal = $red["serijal"];
$sql2 = "SELECT * FROM epizode WHERE serijal='$serijal'";
$upit2 = mysqli_query($conn,$sql2);
while($red2 = mysqli_fetch_assoc($upit2)) { ?>

<div class="art">
<img src="<?=$red2["slika"]?>">
<div><?=$red2["naziv"]?></div>
<a href="delete.php?id=<?=$red2["id"]?>">DELETE</a>
</div>
<?php } ?>
<div style="clear:both;"></div>
</div>
<?php } ?>
</div>

<!--TELO-->
<div class="nosac">
<h1 style="text-align:center; font-size:40px; color:#444;">OVDE MOZETE OBRISATI VEST</h1>
<?php
$sql = "SELECT * FROM vesti";
$upit = mysqli_query($conn,$sql);
while($red = mysqli_fetch_assoc($upit)) { ?>

<div class="art">
<div><?=$red["naziv"]?></div>
<article><?=$red["opis"]?></article>
<a href="deletevesti.php?id=<?=$red["id"]?>">DELETE</a>
</div>
<?php } ?>
</div>

<!-- MANGE -->
<div class="nosac">
<h1 style="text-align:center; font-size:40px; color:#444;">OVDE MOZETE OBRISATI MANGE</h1>
<?php
$sql = "SELECT * FROM mange";
$upit = mysqli_query($conn,$sql);
while($red = mysqli_fetch_assoc($upit)) { ?>

<div class="art">
<img src="<?=$red["slika1"]?>">
<div><?=$red["naziv"]?></div>
<a href="deletemange.php?id=<?=$red["id"]?>">DELETE</a>
</div>
<?php } ?>
</div>

<!-- FILMOVI -->
<div class="nosac" id="film">
<h1 style="text-align:center; font-size:40px; color:#444;">OVDE MOŽETE OBRISATI FILM</h1>
<?php
$sql = "SELECT * FROM filmovi";
$upit = mysqli_query($conn,$sql);
while($red = mysqli_fetch_assoc($upit)) { ?>

<div class="art">
<img src="<?=$red["slika"]?>">
<div><?=$red["naziv"]?></div>
<a href="deletefilmovi.php?id=<?=$red["id"]?>">DELETE</a>
</div>
<?php } ?>
</div>

<!-- SPECIJALI -->
<div class="nosac" id="specijal">
<h1 style="text-align:center; font-size:40px; color:#444;">OVDE MOŽETE OBRISATI SPECIJAL</h1>
<?php
$sql = "SELECT * FROM specijali";
$upit = mysqli_query($conn,$sql);
while($red = mysqli_fetch_assoc($upit)) { ?>

<div class="art">
<img src="<?=$red["slika"]?>">
<div><?=$red["naziv"]?></div>
<a href="deletespecijali.php?id=<?=$red["id"]?>">DELETE</a>
</div>
<?php } ?>
</div>

<!-- OVA EPIZODE -->
<div class="nosac" id="ovaepizode">
<h1 style="text-align:center; font-size:40px; color:#444;">OVDE MOŽETE OBRISATI OVA EPIZODE</h1>
<?php
$sql = "SELECT * FROM ovaepizode";
$upit = mysqli_query($conn,$sql);
while($red = mysqli_fetch_assoc($upit)) { ?>

<div class="art">
<img src="<?=$red["slika"]?>">
<div><?=$red["naziv"]?></div>
<a href="deleteovaepizode.php?id=<?=$red["id"]?>">DELETE</a>
</div>
<?php } ?>
</div>

<?php include("controlp-futer.php"); ?>