<?php include("head.php"); ?>

<style>
.traka{width:1240px; height:40px; line-height:40px; text-align:center; color:#fff; background:#272b34; border-radius:10px; margin:10px auto; font-size:18px; font-weight:bold;}

.telo{width:1280px; height:402px; margin:20px auto 10px auto;}
.telo::after{clear:both; display:table; content:"";}
.levo{width:1076px; height:400px; margin:1px auto 18px auto; float:left;}
.serijali{width:1070px; height:30px; line-height:30px; text-align:left; font-weight:bold; color:#fff; padding-left:10px; background:linear-gradient(to right, #22242b , #17191f); border-radius:30px;}
.slika{width:200px; height:320px; margin:9px 4px; float:left; position:relative;}
.slika img{width:100%; height:100%; object-fit:cover; border-radius:10px;}
.slika div{color:#fff; font-weight:bold; text-align:center; bottom:0px; position:absolute; background:#1e2027; border-radius:10px; width:100%; padding:5px; transition:ease 0.1s; visibility:hidden;}
.slika img:hover{opacity:0.5;}
.slika:hover div{visibility:visible; transition:ease 0.5s;}

.desno{width:200px; height:400px; margin:1px auto 18px auto; float:left;}

.socijalnemreze{width:190px; height:30px; line-height:30px; text-align:center; background:#22242b; color:#fff; font-weight:bold; margin:5px 4px; border-radius:10px;}
.box-mreze{width:190px; height:300px; margin:15px 4px; border-radius:10px; background:#22242b;}
.box-mreze header{width:180px; height:80px; margin:10px 5px; border-radius:10px; float:left; border:solid 1px #f00; padding:10px;}
.box-mreze header a{display:block; text-align:center; margin:9px 0;}

.informacije{width:1280px; height:30px; line-height:15px; text-align:left; font-weight:bold; color:#fff; padding:10px; background:linear-gradient(to right, #22242b , #17191f); border-radius:30px; margin:5px auto;}

.banner{width:1280px; height:400px; margin:25px auto; background:#777; position:relative; overflow:hidden;}

.ba1{width:1280px; height:400px; overflow:hidden; position:absolute; left:0; top:0; animation:banner1 18s infinite;}
@keyframes banner1{
0%{opacity:1;}
33%{opacity:1;}
36%{opacity:0;}
100%{opacity:0;}
}

.ba2{width:1280px; height:400px; overflow:hidden; position:absolute; left:0; top:0; animation:banner2 18s infinite;}
@keyframes banner2{
0%{opacity:1;}
66%{opacity:1;}
69%{opacity:0;}
100%{opacity:0;}
}

.ba3{width:1280px; height:400px; overflow:hidden; position:absolute; left:0; top:0; animation:banner3 18s infinite;}
@keyframes banner3{
0%{opacity:1;}
69%{opacity:1;}
98%{opacity:1;}
100%{opacity:0;}
}

.banner1{width:1280px; height:400px; background:url(baner/pozadina.png); background-size:cover; overflow:hidden; position:absolute; left:0; top:0;}
.sl1{position:absolute; width:250px; height:350px; object-fit:fill; animation:bas1 6s infinite;}
@keyframes bas1{
0%{left:100px; bottom:450px;}
50%{left:100px; bottom:20px;}
100%{left:100px; bottom:20px;}
}
.sl2{position:absolute; width:500px; height:250px; object-fit:contain; animation:bas2 6s infinite;}
@keyframes bas2{
0%{right:120px; bottom:450px;}
50%{right:120px;bottom:150px;}
100%{right:120px; bottom:150px;}
}
.sl3{position:absolute; width:600px; height:200px; object-fit:contain; animation:bas3 6s infinite;}
@keyframes bas3{
0%{right:600px; bottom:450px;}
50%{right:50px; bottom:10px;}
100%{right:50px; bottom:10px;}
}
.banner2{width:1280px; height:400px; background:#6CF; overflow:hidden; position:absolute; left:0; top:0;}
.sl4{position:absolute; width:700px; height:200px; object-fit:contain; animation:bas4 6s infinite;}
@keyframes bas4{
0%{left:100px; top:20px;}
100%{left:100px; top:20px;}
}
.sl5{position:absolute; width:500px; height:70px; object-fit:contain; animation:bas5 6s infinite;}
@keyframes bas5{
0%{left:-530px; bottom:50px;}
50%{left:0; bottom:50px;}
100%{left:0; bottom:50px;}
}
.sl6{position:absolute; animation:bas6 6s infinite;}
@keyframes bas6{
0%{right:-430px; top:30px;}
50%{right:50px; top:30px;}
100%{right:50px; top:30px;}
}
.sl7{position:absolute; animation:bas7 6s infinite;}
@keyframes bas7{
0%{right:-430px; bottom:30px;}
50%{right:50px; bottom:30px;}
100%{right:50px; bottom:30px;}
}
.banner3{width:1280px; height:400px; background:#C9F; overflow:hidden; position:absolute; left:0; top:0;}
.sl8{position:absolute; width:800px; height:220px; object-fit:contain; animation:bas8 6s infinite;}
@keyframes bas8{
0%{right:80px; top:0;}
100%{right:80px; top:0;}
}
.sl9{position:absolute; width:650px; height:120px; object-fit:contain; animation:bas9 6s infinite;}
@keyframes bas9{
0%{right:-730px; bottom:50px;}
50%{right:120px; bottom:50px;}
100%{right:120px; bottom:50px;}
}
.sl10{position:absolute; animation:bas10 6s infinite;}
@keyframes bas10{
0%{left:-430px; top:30px;}
50%{left:100px; top:30px;}
100%{left:100px; top:30px;}
}
.sl11{position:absolute; animation:bas11 6s infinite;}
@keyframes bas11{
0%{left:-430px; bottom:30px;}
50%{left:100px; bottom:30px;}
100%{left:100px; bottom:30px;}
}

</style>

<!-- traka poruka -->
<div class="traka">
AKTUELNO
</div>
<!-- banner -->
<div class="banner">

<!-- banner 3 -->
<div class="ba3">
<div class="banner3">
<img class="sl8" src="baner/z4.gif">
<img class="sl9" src="baner/slova3.png">
<img class="sl10" src="baner/baner4.jpg" width="250" height="160">
<img class="sl11" src="baner/baner5.jpg" width="250" height="160">
</div>
</div>
<!-- banner 3 -->

<!-- banner 2 -->
<div class="ba2">
<div class="banner2">
<img class="sl4" src="baner/z2.png">
<img class="sl5" src="baner/slova2.png">
<img class="sl6" src="baner/slika1.jpg" width="400" height="160">
<img class="sl7" src="baner/slika2.jpg" width="400" height="160">
</div>
</div>
<!-- banner 2 -->

<!-- banner 1 -->
<div class="ba1">
<div class="banner1">
<img class="sl1" src="baner/goku.png">
<img class="sl2" src="baner/baner2.gif">
<img class="sl3" src="baner/slova.png">
</div>
</div>
<!-- banner 1 -->

</div>
<!-- banner -->

<!-- telo -->
<div class="telo">

<!-- levo -->
<div class="levo">

<!-- serijali -->
<div class="serijali">
SERIJALI
</div>
<!-- serijali -->

<div class="slika">
<a href="serijal.php?serijal=Zmajeva kugla"><img src="slike/slika3.jpg"></a>
<div>ZMAJEVA KUGLA</div>
</div>

<div class="slika">
<a href="serijal.php?serijal=Zmajeva kugla z"><img src="slike/slika1.jpg"></a>
<div>ZMAJEVA KUGLA Z</div>
</div>

<div class="slika">
<a href="serijal.php?serijal=Zmajeva kugla gt"><img src="slike/slika6.jpg"></a>
<div>ZMAJEVA KUGLA GT</div>
</div>

<div class="slika">
<a href="serijal.php?serijal=Zmajeva kugla super"><img src="slike/slika5.jpg"></a>
<div>ZMAJEVA KUGLA SUPER</div>
</div>

<div class="slika">
<a href="serijal.php?serijal=Zmajeva kugla heroji"><img src="slike/slika4.jpg"></a>
<div>ZMAJEVA KUGLA HEROJI</div>
</div>

</div>
<!-- levo end -->

<!-- desno -->
<div class="desno">

<div class="socijalnemreze">
PRIJATELJI SAJTA
</div>

<div class="box-mreze">
<header>
<div style="text-align:center; font-size:16px; font-weight:bold; color:#fff;">BG ANIME</div>
<a href="https://www.bg-anime.com/?fbclid=IwAR0FbZ_utEM8QBQ0aXCFs2whIo2rHYRWVI5uVnFlLhl6PoAt3jx6PPKuW6A" target="new"><img src="grafika/prijatelj1.png"></a></header>
<header>
<div style="text-align:center; font-size:16px; font-weight:bold; color:#fff;">ANIME BALKAN</div>
<a href="https://animebalkan.org/" target="new"><img src="grafika/Baner  Sajta Anime Balkan.png"></a></header>
<header>
<div style="text-align:center; font-size:16px; font-weight:bold; color:#fff;">FB STRANICA</div>
<a href="https://www.facebook.com/Zmajeva-KUGLA-SR-41308134761/" target="new"><img src="grafika/logo3.png" width="40" height="40"></a></header>
</div>

</div>
<!-- desno end -->

</div>
<!-- telo end -->

<!-- informacije -->
<div class="informacije">
INFORMACIJE
</div>
<!-- informacije -->

<?php include("futer.php"); ?>