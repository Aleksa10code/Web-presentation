<?php include("controlp-head.php"); ?>
<style>
/* TELO */
main{width:800px; min-height:100px; margin:70px auto; border:solid 2px #f00; border-radius:25px; position:relative; background:#17191f;}
main div{width:600px; height:40px; font-size:30px; text-align:center; color:#dfdfef; margin:10px auto; background:#272b34; border-radius:15px;}
main form{width:600px; margin:0 auto;}
input[type="text"], input[type="number"] {width:100%; height:40px; font-size:18px; color:#222; padding-left:10px; border:solid 1px #b2b282; margin-top:5px; border-radius:15px;}
textarea{width:100%; height:150px; font-size:18px; padding-left:10px; border:solid 1px #b2b282; margin-top:5px; border-radius:15px;}
input[type="file"] {width:100%; height:40px; border:solid 1px #ccc; margin-top:5px; border-radius:15px; color:#f1f1f1;}
input[type="submit"] {width:100%; height:40px; text-align:center; font-size:18px; color:#ddd; background:#272b34; border-radius:15px; border:none; margin:5px auto; cursor:pointer;}


@media only screen and (max-width: 480px) {
main{width:100%;}
main div{width:90%; margin:5%;}
main form{width:90%; margin:5%;}

}

@media only screen and (min-width: 481px) and (max-width: 1024px) {
main{width:90%; margin:70px 5%;}
main div{width:90%; margin:5%;}
main form{width:90%; margin:5%;}
}

</style>
</head>

<body>

<!--TELO-->
<main>
<div>Unesite Vest</div>
<form action="unosvesti.php" method="post" enctype="multipart/form-data">
<select name="tip">
<option value="Novosti">Novosti</option>
<option value="Parodije">Parodije</option>
<option value="Povezano">Povezano</option>
<option value="O nama">O nama</option>
<option value="Epizode ne rade">Epizode ne rade</option>
<option value="Kontakt">Kontakt</option>
</select>

<input type="text" name="novost" placeholder="Sledeca novost">
<input type="text" name="naziv" placeholder="Naziv">
<textarea name="text1" placeholder="Prvi tekst"></textarea>
<input type="file" name="slika1">
<input type="file" name="slika2">
<input type="file" name="slika3">
<input type="file" name="slika4">
<input type="file" name="slika5">
<textarea name="text2" placeholder="Drugi tekst"></textarea>
<input type="file" name="slika6">
<input type="file" name="slika7">
<input type="file" name="slika8">
<input type="file" name="slika9">
<input type="file" name="slika10">
<textarea name="opis" placeholder="Unesite opis.."></textarea>
<input type="text" name="youtube" placeholder="Youtube">
<input type="submit" value="POTVRDI">
</form>
</main>

<?php include("controlp-futer.php"); ?>