<?php include("head.php"); ?>

<style>
.traka{width:1240px; height:40px; line-height:40px; text-align:center; color:#fff; background:#272b34; border-radius:10px; margin:10px auto; font-size:24px; font-weight:bold;}
.telo{width:1280px; min-height:400px; margin:20px auto; position:relative;}
</style>
<!-- traka poruka -->
<div class="traka">
FILMOVI
</div>

<div style="position:absolute; left:calc(50% - 600px); top:150px;"><a href="https://www.youtube.com/user/RapidDubs" target="new"><img style="width:1200px; height:200px; object-fit:cover; border-radius:20px; border:solid 2px #f00;" src="slike/Baner 6.jpg"></a></div>

<!-- telo -->
<div class="telo">

<div style="width:1200px; margin:240px auto 50px auto; padding:20px; color:#fff; position:relative;">
<?php
$sql = "SELECT * FROM filmovi";
$upit = mysqli_query($conn,$sql);
while($red = mysqli_fetch_assoc($upit)) { ?>
<?php
$id = $red["id"];
?>
<a href="<?php echo 'filmprikaz.php?id='.$id; ?>" title="<?=$red['red']?>" style="width:360px; height:360px; margin:10px; display:block; float:left; border-radius:10px; border:solid 2px #f00;"><img src="<?=$red['slika']?>" style="object-fit:contain; width:100%; height:100%;"></a>

<?php } ?>
<div style="clear:both;"></div>
</div>

</div>
<!-- telo end -->
<?php include("futer.php"); ?>