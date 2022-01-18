<?php session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
html{font-size:100%; font-family:Arial;}
body{margin:0; padding:0;}
*{box-sizing:border-box;}

.nosi{position:fixed; left:0; top:0; width:100%; height:100%; background:#131353;}
.nosi div{width:240px; height:90px; margin:0 auto;}
.nosi div h3{margin:0; text-align:center; color:#fff;}
form{width:300px; height:300px; background:#b40214; position:absolute; left:calc(50% - 150px); top:calc(50% - 150px); padding:10px;}
input{width:100%; height:40px; font-size:18px; padding-left:10px; margin-bottom:10px; outline:none;}
input[type="submit"]{background:#fff101; color:#fff; border:none; cursor:pointer;}
input[type="checkbox"]{width:20px; height:20px;}
</style>
</head>

<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
if($_POST["user"] == "zmajevakugla2021" and $_POST["password"] == "dejan2021")
{$_SESSION['user'] = "zmajevakugla2021";
if($_POST["zapamti"] == "da")
{setcookie("zapamti","da",time() + 86400 * 30,"/");}   
header("Location: controlp.php");} else
{header("Location: index.php");}
}
?>
<div class="nosi">
<form action="login.php" method="post">
<div>
<h3>ADMIN PANEL</h3>
</div>
<input type="text" name="user" placeholder="Username" />
<input type="text" name="password" placeholder="Password" />
<input type="submit" value="Log-in" />
<span style="color:#fff;">Zapamti me:</span> <input type="checkbox" name="zapamti" value="da">
</form>
</div>

</body>
</html>