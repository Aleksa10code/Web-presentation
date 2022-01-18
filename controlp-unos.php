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
<div>Unesite Serijal</div>
<form action="unosfilmova.php" method="post" enctype="multipart/form-data">
<input type="text" name="tip" placeholder="Tip">
<input type="text" name="serijal" placeholder="Serijal">
<input type="text" name="epizoda" placeholder="Epizoda">
<input type="text" name="naziv" placeholder="Naziv">
<input type="text" name="link" placeholder="Link">
<input type="file" name="slika">
<textarea name="opis" placeholder="Unesite opis.."></textarea>
<input type="text" name="trajanje" placeholder="Trajanje">
<input type="text" name="datumemitovanja" placeholder="Datum emitovanja">
<input type="submit" value="POTVRDI">
</form>
</main>

<?php include("controlp-futer.php"); ?>