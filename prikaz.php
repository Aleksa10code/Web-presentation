<?php include("head.php"); ?>

<style>
.traka{width:1240px; height:40px; line-height:40px; text-align:center; color:#fff; background:#272b34; border-radius:10px; margin:10px auto; font-size:24px; font-weight:bold;}
.telo{width:1280px; min-height:400px; margin:40px auto;}

.nosi2{width:1230px; margin:20px auto;}
.nosi2::after{clear:both; display:table; content:"";}
.nosi2 div{width:650px; height:400px; overflow:hidden; float:left;}
.nosi2 article{width:578px; min-height:400px; float:left; color:#fff; padding:10px; word-break: break-all; position:relative;}

@media only screen and (max-width: 480px){
	
}

</style>
<?php
$id = $_GET["id"];
$sql = "SELECT * FROM epizode WHERE id = '$id'";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit); ?>

<!-- traka poruka -->
<div class="traka">
<?=$red["naziv"]?>
</div>

<!-- telo -->
<div class="telo">

<div class="nosi2">

<div><?=$red["link"]?></div>

<article>
<h2 style="color:#3311ff; padding-left:10px;"><?=$red["epizoda"]?></h2>
<div style="width:100%; padding-left:10px;"><?=$red["opis"]?></div>
</article>

</div>

</div>
<!-- telo end -->

<?php include("futer.php"); ?>