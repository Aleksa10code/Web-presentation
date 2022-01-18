<?php include("head.php"); ?>

<style>
.telo{width:1280px; margin:10px auto; padding:10px; white-space:pre-wrap; color:#fff; font-size:18px;}
</style>
<?php
$vesti = $_GET["vesti"];
$sql = "SELECT * FROM vesti WHERE id='$vesti'";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit);
?>

<div class="telo">
<div style="text-align:center; font-size:24px; color:red; font-weight:bold;"><?=$red["naziv"]?></div>

<?php if($red["opis"] !== ""){ ?>
<div><?=$red["opis"]?></div>
<?php } ?>
<div style="width:100%; margin:20px auto; white-space:nowrap;">
<?php if($red["slika1"]){ ?>
<img src="<?=$red["slika1"]?>" style="object-fit:contain; border:solid 3px #f00; border-radius:20px; width:230px; height:230px; margin:10px; float:left;">
<?php } ?>

<?php if($red["slika2"]){ ?>
<img src="<?=$red["slika2"]?>" style="object-fit:contain; border:solid 3px #f00; border-radius:20px; width:230px; height:230px; margin:10px; float:left;">
<?php } ?>

<?php if($red["slika3"]){ ?>
<img src="<?=$red["slika3"]?>" style="object-fit:contain; border:solid 3px #f00; border-radius:20px; width:230px; height:230px; margin:10px; float:left;">
<?php } ?>

<?php if($red["slika4"]){ ?>
<img src="<?=$red["slika4"]?>" style="object-fit:contain; border:solid 3px #f00; border-radius:20px; width:230px; height:230px; margin:10px; float:left;">
<?php } ?>

<?php if($red["slika5"]){ ?>
<img src="<?=$red["slika5"]?>" style="object-fit:contain; border:solid 3px #f00; border-radius:20px; width:230px; height:230px; margin:10px; float:left;">
<?php } ?>
<div style="clear:both;"></div>
</div>

<?php if($red["text1"] !== ""){ ?>
<div><?=$red["text1"]?></div>
<?php } ?>

<div style="width:100%; margin:20px auto; white-space:nowrap;">
<?php if($red["slika6"]){ ?>
<img src="<?=$red["slika6"]?>" style="object-fit:contain; border:solid 3px #f00; border-radius:20px; width:230px; height:230px; margin:10px; float:left;">
<?php } ?>

<?php if($red["slika7"]){ ?>
<img src="<?=$red["slika7"]?>" style="object-fit:contain; border:solid 3px #00f; border-radius:20px; width:230px; height:230px; margin:10px; float:left;">
<?php } ?>

<?php if($red["slika8"]){ ?>
<img src="<?=$red["slika8"]?>" style="object-fit:contain; border:solid 3px #f0f; border-radius:20px; width:230px; height:230px; margin:10px; float:left;">
<?php } ?>

<?php if($red["slika9"]){ ?>
<img src="<?=$red["slika9"]?>" style="object-fit:contain; border:solid 3px #0f0; border-radius:20px; width:230px; height:230px; margin:10px; float:left;">
<?php } ?>

<?php if($red["slika10"]){ ?>
<img src="<?=$red["slika10"]?>" style="object-fit:contain; border:solid 3px #ff0; border-radius:20px; width:230px; height:230px; margin:10px; float:left;">
<?php } ?>
<div style="clear:both;"></div>
</div>

<?php if($red["text2"] !== ""){ ?>
<div><?=$red["text2"]?></div>
<?php } ?>

<div style="margin:-120px auto 40px 225px;"><?=$red["youtube"]?></div>


</div>
<?php include("futer.php"); ?>