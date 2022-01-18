<?php include("head.php"); ?>

<style>
.traka{width:1240px; height:40px; line-height:40px; text-align:center; color:#fff; background:#272b34; border-radius:10px; margin:10px auto; font-size:24px; font-weight:bold;}
.telo{width:1280px; margin:10px auto; padding:10px; white-space:pre-wrap; color:#fff; font-size:18px;}
<?php
if($_GET['tip']=="Povezano"){
echo '
.nosimreze{width:1280px; height:120px; margin:auto; position:relative; border:solid 1px #fff; border-radius:20px;}
.mreze{width:310px; height:100px; border:solid 1px #fff; border-radius:20px; position:absolute; right:calc(50% - 155px); top:10px;}
.mreze a{width:80px; height:80px;}
.mreze img{width:80px; height:80px; float:left; display:block; margin:10px 10px;}';
} else{echo '
.nosimreze{width:1280px; height:80px; margin:auto; position:relative;}
.mreze{width:190px; height:60px; border:solid 1px #fff; border-radius:20px; position:absolute; right:0; top:10px;}
.mreze a{width:40px; height:40px;}
.mreze img{width:40px; height:40px; float:left; display:block; margin:10px 10px;}';}?>
</style>
<?php
$tip = $_GET["tip"];
$sql = "SELECT * FROM vesti WHERE tip='$tip'";
$upit = mysqli_query($conn,$sql);
$red = mysqli_fetch_assoc($upit);
?>

<!-- traka poruka -->
<div class="traka">
<?=$_GET["tip"]?>
</div>

<div class="nosimreze">
<div class="mreze">
<a href="https://www.facebook.com/groups/1896775710572296/?ref=share"><img src="grafika/logo3.png"></a>
<a href="https://www.instagram.com/zmajevakuglasr/?igshid=9fyp7f44ipif&fbclid=IwAR00OE7jwpjoTJwO11PObytf6cGwrnMg7BAJJe3QleySpvOOAtbxGVnV53I"><img src="grafika/logo6.png"></a>
<a href="https://www.youtube.com/channel/UCpN46dnssnhaa00xCSgOGzA?fbclid=IwAR0BKJJE_5YTuwAcCPtsZC74X5sixVH6DXu4RaBy_21MCV8KvmHUq2fWn6I"><img src="grafika/youtube.png"></a>
<div style="clear:both;"></div>
</div>
</div>

<?php if($tip == "Novosti"){
$sql2 = "SELECT * FROM vesti WHERE tip='$tip'";
$upit2 = mysqli_query($conn,$sql2);
echo '<div class="telo" style="width:600px;">';
while($red2 = mysqli_fetch_assoc($upit2)){
echo
'<a href="vestiprikaz.php?vesti='.$red2["id"].'" style="display:block; width:100%; height:40px; line-height:40px; color:#fff; font-size:18px; margin:0; text-align:center; padding:0 0 0 10px; border:solid 1px #f00; text-decoration:none;">'.$red2["naziv"].'</a>';	
}echo '</div>';}
elseif($tip == "Parodije"){
$sql2 = "SELECT * FROM vesti WHERE tip='$tip' ORDER BY id ASC";
$upit2 = mysqli_query($conn,$sql2);
echo '<div class="telo" style="width:600px;">';
while($red2 = mysqli_fetch_assoc($upit2)){
echo
'<a href="vestiprikaz.php?vesti='.$red2["id"].'" style="display:block; width:100%; height:40px; line-height:40px; color:#fff; font-size:18px; margin:0; text-align:center; padding:0 0 0 10px; border:solid 1px #f00; text-decoration:none;">'.$red2["naziv"].'</a>';	
}echo '</div>';} 

else

{echo '<div class="telo">
<h2 align="center">'.$red["naziv"].'</h2>
'.$red["opis"].'</div>';} 

?>	

<?php include("futer.php"); ?>