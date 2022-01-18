<?php
session_start();
include("connect.php"); 
if(isset($_SESSION['user']) and $_SESSION['user'] == "zmajevakugla2021"){} 
else
{
if(isset($_COOKIE["zapamti"])){$_SESSION['user'] = "zmajevakugla2021"; header("Location: controlp.php");}else{header("Location: login.php");}} 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="cstyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CONTROL-P HEAD</title>
</head>

<body>

<!--HEAD-->
<header>
<administrator>
<a href="controlp.php" style="text-decoration:none; color:#fff;">ADMINISTRATOR</a>
<img src="grafika/admin2.png">
<a href="logout.php" style="color:#f00;">LOGOUT</a>
</administrator>

<aside>
<a href="index.php" target="new"><img src="grafika/logo10.png"></a>
</aside>

<article>
<a href="controlp-unosmangi.php">UNOS MANGI</a>
<a href="controlp-unos.php">UNOS SERIJALA</a>
<a href="controlp-unosfilmova.php">UNOS FILMOVA</a>
<a href="controlp-unosspecijala.php">UNOS SPECIJALA</a>
<a href="controlp-unosovaepizode.php"  style="font-size:12px;">UNOS OVA EPIZODA</a>
<a href="controlp-unosvesti.php">UNOS VESTI</a>
</article>

</header>
<!-- HEAD END -->