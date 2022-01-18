<?php
include("connect.php");
$tip = $_POST["tip"];
$naziv = $_POST["naziv"];
$poglavlja = $_POST["poglavlja"];
$trajanje = $_POST["trajanje"];
$datum = $_POST["datum"];
$opis = $_POST["opis"];

// slika 1
if(!empty($_FILES["slika1"]["name"])) {
$niz=explode(".",$_FILES["slika1"]["name"]);
$ext=$niz[1];	
$slika1="mange/".time()."1.".$ext;
move_uploaded_file($_FILES["slika1"]["tmp_name"],$slika1);}
else {$slika1="";}

// slika 2
if(!empty($_FILES["slika2"]["name"])) {
$niz=explode(".",$_FILES["slika2"]["name"]);
$ext=$niz[1];	
$slika2="mange/".time()."2.".$ext;
move_uploaded_file($_FILES["slika2"]["tmp_name"],$slika2);}
else {$slika2="";}

// slika 3
if(!empty($_FILES["slika3"]["name"])) {
$niz=explode(".",$_FILES["slika3"]["name"]);
$ext=$niz[1];	
$slika3="mange/".time()."3.".$ext;
move_uploaded_file($_FILES["slika3"]["tmp_name"],$slika3);}
else {$slika3="";}

// slika 4
if(!empty($_FILES["slika4"]["name"])) {
$niz=explode(".",$_FILES["slika4"]["name"]);
$ext=$niz[1];	
$slika4="mange/".time()."4.".$ext;
move_uploaded_file($_FILES["slika4"]["tmp_name"],$slika4);}
else {$slika4="";}

// slika 5
if(!empty($_FILES["slika5"]["name"])) {
$niz=explode(".",$_FILES["slika5"]["name"]);
$ext=$niz[1];	
$slika5="mange/".time()."5.".$ext;
move_uploaded_file($_FILES["slika5"]["tmp_name"],$slika5);}
else {$slika5="";}

// slika 6
if(!empty($_FILES["slika6"]["name"])) {
$niz=explode(".",$_FILES["slika6"]["name"]);
$ext=$niz[1];	
$slika6="mange/".time()."6.".$ext;
move_uploaded_file($_FILES["slika6"]["tmp_name"],$slika6);}
else {$slika6="";}

// slika 7
if(!empty($_FILES["slika7"]["name"])) {
$niz=explode(".",$_FILES["slika7"]["name"]);
$ext=$niz[1];	
$slika7="mange/".time()."7.".$ext;
move_uploaded_file($_FILES["slika7"]["tmp_name"],$slika7);}
else {$slika7="";}

// slika 8
if(!empty($_FILES["slika8"]["name"])) {
$niz=explode(".",$_FILES["slika8"]["name"]);
$ext=$niz[1];	
$slika8="mange/".time()."8.".$ext;
move_uploaded_file($_FILES["slika8"]["tmp_name"],$slika8);}
else {$slika8="";}

// slika 9
if(!empty($_FILES["slika9"]["name"])) {
$niz=explode(".",$_FILES["slika9"]["name"]);
$ext=$niz[1];	
$slika9="mange/".time()."9.".$ext;
move_uploaded_file($_FILES["slika9"]["tmp_name"],$slika9);}
else {$slika9="";}

// slika 10
if(!empty($_FILES["slika10"]["name"])) {
$niz=explode(".",$_FILES["slika10"]["name"]);
$ext=$niz[1];	
$slika10="mange/".time()."10.".$ext;
move_uploaded_file($_FILES["slika10"]["tmp_name"],$slika10);}
else {$slika10="";}

// slika 11
if(!empty($_FILES["slika11"]["name"])) {
$niz=explode(".",$_FILES["slika11"]["name"]);
$ext=$niz[1];	
$slika11="mange/".time()."11.".$ext;
move_uploaded_file($_FILES["slika11"]["tmp_name"],$slika11);}
else {$slika11="";}

// slika 12
if(!empty($_FILES["slika12"]["name"])) {
$niz=explode(".",$_FILES["slika12"]["name"]);
$ext=$niz[1];	
$slika12="mange/".time()."12.".$ext;
move_uploaded_file($_FILES["slika12"]["tmp_name"],$slika12);}
else {$slika12="";}

// slika 13
if(!empty($_FILES["slika13"]["name"])) {
$niz=explode(".",$_FILES["slika13"]["name"]);
$ext=$niz[1];	
$slika13="mange/".time()."13.".$ext;
move_uploaded_file($_FILES["slika13"]["tmp_name"],$slika13);}
else {$slika13="";}

// slika 14
if(!empty($_FILES["slika14"]["name"])) {
$niz=explode(".",$_FILES["slika14"]["name"]);
$ext=$niz[1];	
$slika14="mange/".time()."14.".$ext;
move_uploaded_file($_FILES["slika14"]["tmp_name"],$slika14);}
else {$slika14="";}

// slika 15
if(!empty($_FILES["slika15"]["name"])) {
$niz=explode(".",$_FILES["slika15"]["name"]);
$ext=$niz[1];	
$slika15="mange/".time()."15.".$ext;
move_uploaded_file($_FILES["slika15"]["tmp_name"],$slika15);}
else {$slika15="";}

// slika 16
if(!empty($_FILES["slika16"]["name"])) {
$niz=explode(".",$_FILES["slika16"]["name"]);
$ext=$niz[1];	
$slika16="mange/".time()."16.".$ext;
move_uploaded_file($_FILES["slika16"]["tmp_name"],$slika16);}
else {$slika16="";}

// slika 17
if(!empty($_FILES["slika17"]["name"])) {
$niz=explode(".",$_FILES["slika17"]["name"]);
$ext=$niz[1];	
$slika17="mange/".time()."17.".$ext;
move_uploaded_file($_FILES["slika17"]["tmp_name"],$slika17);}
else {$slika17="";}

// slika 18
if(!empty($_FILES["slika18"]["name"])) {
$niz=explode(".",$_FILES["slika18"]["name"]);
$ext=$niz[1];	
$slika18="mange/".time()."18.".$ext;
move_uploaded_file($_FILES["slika18"]["tmp_name"],$slika18);}
else {$slika18="";}

// slika 19
if(!empty($_FILES["slika19"]["name"])) {
$niz=explode(".",$_FILES["slika19"]["name"]);
$ext=$niz[1];	
$slika19="mange/".time()."19.".$ext;
move_uploaded_file($_FILES["slika19"]["tmp_name"],$slika19);}
else {$slika19="";}

// slika 20
if(!empty($_FILES["slika20"]["name"])) {
$niz=explode(".",$_FILES["slika20"]["name"]);
$ext=$niz[1];	
$slika20="mange/".time()."20.".$ext;
move_uploaded_file($_FILES["slika20"]["tmp_name"],$slika20);}
else {$slika20="";}

// slika 21
if(!empty($_FILES["slika21"]["name"])) {
$niz=explode(".",$_FILES["slika21"]["name"]);
$ext=$niz[1];	
$slika21="mange/".time()."21.".$ext;
move_uploaded_file($_FILES["slika21"]["tmp_name"],$slika21);}
else {$slika21="";}

// slika 22
if(!empty($_FILES["slika22"]["name"])) {
$niz=explode(".",$_FILES["slika22"]["name"]);
$ext=$niz[1];	
$slika22="mange/".time()."22.".$ext;
move_uploaded_file($_FILES["slika22"]["tmp_name"],$slika22);}
else {$slika22="";}

// slika 23
if(!empty($_FILES["slika23"]["name"])) {
$niz=explode(".",$_FILES["slika23"]["name"]);
$ext=$niz[1];	
$slika23="mange/".time()."23.".$ext;
move_uploaded_file($_FILES["slika23"]["tmp_name"],$slika23);}
else {$slika23="";}

// slika 24
if(!empty($_FILES["slika24"]["name"])) {
$niz=explode(".",$_FILES["slika24"]["name"]);
$ext=$niz[1];	
$slika24="mange/".time()."24.".$ext;
move_uploaded_file($_FILES["slika24"]["tmp_name"],$slika24);}
else {$slika24="";}

// slika 25
if(!empty($_FILES["slika25"]["name"])) {
$niz=explode(".",$_FILES["slika25"]["name"]);
$ext=$niz[1];	
$slika25="mange/".time()."25.".$ext;
move_uploaded_file($_FILES["slika25"]["tmp_name"],$slika25);}
else {$slika25="";}

// slika 26
if(!empty($_FILES["slika26"]["name"])) {
$niz=explode(".",$_FILES["slika26"]["name"]);
$ext=$niz[1];	
$slika26="mange/".time()."26.".$ext;
move_uploaded_file($_FILES["slika26"]["tmp_name"],$slika26);}
else {$slika26="";}

// slika 27
if(!empty($_FILES["slika27"]["name"])) {
$niz=explode(".",$_FILES["slika27"]["name"]);
$ext=$niz[1];	
$slika27="mange/".time()."27.".$ext;
move_uploaded_file($_FILES["slika27"]["tmp_name"],$slika27);}
else {$slika27="";}

// slika 28
if(!empty($_FILES["slika28"]["name"])) {
$niz=explode(".",$_FILES["slika28"]["name"]);
$ext=$niz[1];	
$slika28="mange/".time()."28.".$ext;
move_uploaded_file($_FILES["slika28"]["tmp_name"],$slika28);}
else {$slika28="";}

// slika 29
if(!empty($_FILES["slika29"]["name"])) {
$niz=explode(".",$_FILES["slika29"]["name"]);
$ext=$niz[1];	
$slika29="mange/".time()."29.".$ext;
move_uploaded_file($_FILES["slika29"]["tmp_name"],$slika29);}
else {$slika29="";}

// slika 30
if(!empty($_FILES["slika30"]["name"])) {
$niz=explode(".",$_FILES["slika30"]["name"]);
$ext=$niz[1];	
$slika30="mange/".time()."30.".$ext;
move_uploaded_file($_FILES["slika30"]["tmp_name"],$slika30);}
else {$slika30="";}


// slika 31
if(!empty($_FILES["slika31"]["name"])) {
$niz=explode(".",$_FILES["slika31"]["name"]);
$ext=$niz[1];	
$slika31="mange/".time()."31.".$ext;
move_uploaded_file($_FILES["slika31"]["tmp_name"],$slika31);}
else {$slika31="";}


// slika 32
if(!empty($_FILES["slika32"]["name"])) {
$niz=explode(".",$_FILES["slika32"]["name"]);
$ext=$niz[1];	
$slika32="mange/".time()."32.".$ext;
move_uploaded_file($_FILES["slika32"]["tmp_name"],$slika32);}
else {$slika32="";}


// slika 33
if(!empty($_FILES["slika33"]["name"])) {
$niz=explode(".",$_FILES["slika33"]["name"]);
$ext=$niz[1];	
$slika33="mange/".time()."33.".$ext;
move_uploaded_file($_FILES["slika33"]["tmp_name"],$slika33);}
else {$slika33="";}


// slika 34
if(!empty($_FILES["slika34"]["name"])) {
$niz=explode(".",$_FILES["slika34"]["name"]);
$ext=$niz[1];	
$slika34="mange/".time()."34.".$ext;
move_uploaded_file($_FILES["slika34"]["tmp_name"],$slika34);}
else {$slika34="";}


// slika 35
if(!empty($_FILES["slika35"]["name"])) {
$niz=explode(".",$_FILES["slika35"]["name"]);
$ext=$niz[1];	
$slika35="mange/".time()."35.".$ext;
move_uploaded_file($_FILES["slika35"]["tmp_name"],$slika35);}
else {$slika35="";}


// slika 36
if(!empty($_FILES["slika36"]["name"])) {
$niz=explode(".",$_FILES["slika36"]["name"]);
$ext=$niz[1];	
$slika36="mange/".time()."36.".$ext;
move_uploaded_file($_FILES["slika36"]["tmp_name"],$slika36);}
else {$slika36="";}


// slika 37
if(!empty($_FILES["slika37"]["name"])) {
$niz=explode(".",$_FILES["slika37"]["name"]);
$ext=$niz[1];	
$slika37="mange/".time()."37.".$ext;
move_uploaded_file($_FILES["slika37"]["tmp_name"],$slika37);}
else {$slika37="";}


// slika 38
if(!empty($_FILES["slika38"]["name"])) {
$niz=explode(".",$_FILES["slika38"]["name"]);
$ext=$niz[1];	
$slika38="mange/".time()."38.".$ext;
move_uploaded_file($_FILES["slika38"]["tmp_name"],$slika38);}
else {$slika38="";}


// slika 39
if(!empty($_FILES["slika39"]["name"])) {
$niz=explode(".",$_FILES["slika39"]["name"]);
$ext=$niz[1];	
$slika39="mange/".time()."39.".$ext;
move_uploaded_file($_FILES["slika39"]["tmp_name"],$slika39);}
else {$slika39="";}


// slika 40
if(!empty($_FILES["slika40"]["name"])) {
$niz=explode(".",$_FILES["slika40"]["name"]);
$ext=$niz[1];	
$slika40="mange/".time()."40.".$ext;
move_uploaded_file($_FILES["slika40"]["tmp_name"],$slika40);}
else {$slika40="";}


// slika 41
if(!empty($_FILES["slika41"]["name"])) {
$niz=explode(".",$_FILES["slika41"]["name"]);
$ext=$niz[1];	
$slika41="mange/".time()."41.".$ext;
move_uploaded_file($_FILES["slika41"]["tmp_name"],$slika41);}
else {$slika41="";}


// slika 42
if(!empty($_FILES["slika42"]["name"])) {
$niz=explode(".",$_FILES["slika42"]["name"]);
$ext=$niz[1];	
$slika42="mange/".time()."42.".$ext;
move_uploaded_file($_FILES["slika42"]["tmp_name"],$slika42);}
else {$slika42="";}


// slika 43
if(!empty($_FILES["slika43"]["name"])) {
$niz=explode(".",$_FILES["slika43"]["name"]);
$ext=$niz[1];	
$slika43="mange/".time()."43.".$ext;
move_uploaded_file($_FILES["slika43"]["tmp_name"],$slika43);}
else {$slika43="";}


// slika 44
if(!empty($_FILES["slika44"]["name"])) {
$niz=explode(".",$_FILES["slika44"]["name"]);
$ext=$niz[1];	
$slika44="mange/".time()."44.".$ext;
move_uploaded_file($_FILES["slika44"]["tmp_name"],$slika44);}
else {$slika44="";}


// slika 45
if(!empty($_FILES["slika45"]["name"])) {
$niz=explode(".",$_FILES["slika45"]["name"]);
$ext=$niz[1];	
$slika45="mange/".time()."45.".$ext;
move_uploaded_file($_FILES["slika45"]["tmp_name"],$slika45);}
else {$slika45="";}


// slika 46
if(!empty($_FILES["slika46"]["name"])) {
$niz=explode(".",$_FILES["slika46"]["name"]);
$ext=$niz[1];	
$slika46="mange/".time()."46.".$ext;
move_uploaded_file($_FILES["slika46"]["tmp_name"],$slika46);}
else {$slika46="";}


// slika 47
if(!empty($_FILES["slika47"]["name"])) {
$niz=explode(".",$_FILES["slika47"]["name"]);
$ext=$niz[1];	
$slika47="mange/".time()."47.".$ext;
move_uploaded_file($_FILES["slika47"]["tmp_name"],$slika47);}
else {$slika47="";}


// slika 48
if(!empty($_FILES["slika48"]["name"])) {
$niz=explode(".",$_FILES["slika48"]["name"]);
$ext=$niz[1];	
$slika48="mange/".time()."48.".$ext;
move_uploaded_file($_FILES["slika48"]["tmp_name"],$slika48);}
else {$slika48="";}


// slika 49
if(!empty($_FILES["slika49"]["name"])) {
$niz=explode(".",$_FILES["slika49"]["name"]);
$ext=$niz[1];	
$slika49="mange/".time()."49.".$ext;
move_uploaded_file($_FILES["slika49"]["tmp_name"],$slika49);}
else {$slika49="";}


// slika 50
if(!empty($_FILES["slika50"]["name"])) {
$niz=explode(".",$_FILES["slika50"]["name"]);
$ext=$niz[1];	
$slika50="mange/".time()."50.".$ext;
move_uploaded_file($_FILES["slika50"]["tmp_name"],$slika50);}
else {$slika50="";}


// slika 51
if(!empty($_FILES["slika51"]["name"])) {
$niz=explode(".",$_FILES["slika51"]["name"]);
$ext=$niz[1];	
$slika51="mange/".time()."51.".$ext;
move_uploaded_file($_FILES["slika51"]["tmp_name"],$slika51);}
else {$slika51="";}


// slika 52
if(!empty($_FILES["slika52"]["name"])) {
$niz=explode(".",$_FILES["slika52"]["name"]);
$ext=$niz[1];	
$slika52="mange/".time()."52.".$ext;
move_uploaded_file($_FILES["slika52"]["tmp_name"],$slika52);}
else {$slika52="";}


// slika 53
if(!empty($_FILES["slika53"]["name"])) {
$niz=explode(".",$_FILES["slika53"]["name"]);
$ext=$niz[1];	
$slika53="mange/".time()."53.".$ext;
move_uploaded_file($_FILES["slika53"]["tmp_name"],$slika53);}
else {$slika53="";}


// slika 54
if(!empty($_FILES["slika54"]["name"])) {
$niz=explode(".",$_FILES["slika54"]["name"]);
$ext=$niz[1];	
$slika54="mange/".time()."54.".$ext;
move_uploaded_file($_FILES["slika54"]["tmp_name"],$slika54);}
else {$slika54="";}


// slika 19
if(!empty($_FILES["slika55"]["name"])) {
$niz=explode(".",$_FILES["slika55"]["name"]);
$ext=$niz[1];	
$slika55="mange/".time()."55.".$ext;
move_uploaded_file($_FILES["slika55"]["tmp_name"],$slika55);}
else {$slika55="";}


// slika 56
if(!empty($_FILES["slika56"]["name"])) {
$niz=explode(".",$_FILES["slika56"]["name"]);
$ext=$niz[1];	
$slika56="mange/".time()."56.".$ext;
move_uploaded_file($_FILES["slika56"]["tmp_name"],$slika56);}
else {$slika56="";}


// slika 57
if(!empty($_FILES["slika57"]["name"])) {
$niz=explode(".",$_FILES["slika57"]["name"]);
$ext=$niz[1];	
$slika57="mange/".time()."57.".$ext;
move_uploaded_file($_FILES["slika57"]["tmp_name"],$slika57);}
else {$slika57="";}


// slika 58
if(!empty($_FILES["slika58"]["name"])) {
$niz=explode(".",$_FILES["slika58"]["name"]);
$ext=$niz[1];	
$slika58="mange/".time()."58.".$ext;
move_uploaded_file($_FILES["slika58"]["tmp_name"],$slika58);}
else {$slika58="";}


// slika 59
if(!empty($_FILES["slika59"]["name"])) {
$niz=explode(".",$_FILES["slika59"]["name"]);
$ext=$niz[1];	
$slika59="mange/".time()."59.".$ext;
move_uploaded_file($_FILES["slika59"]["tmp_name"],$slika59);}
else {$slika59="";}


// slika 60
if(!empty($_FILES["slika60"]["name"])) {
$niz=explode(".",$_FILES["slika60"]["name"]);
$ext=$niz[1];	
$slika60="mange/".time()."60.".$ext;
move_uploaded_file($_FILES["slika60"]["tmp_name"],$slika60);}
else {$slika60="";}


// slika 61
if(!empty($_FILES["slika61"]["name"])) {
$niz=explode(".",$_FILES["slika61"]["name"]);
$ext=$niz[1];	
$slika61="mange/".time()."61.".$ext;
move_uploaded_file($_FILES["slika61"]["tmp_name"],$slika61);}
else {$slika61="";}


// slika 62
if(!empty($_FILES["slika62"]["name"])) {
$niz=explode(".",$_FILES["slika62"]["name"]);
$ext=$niz[1];	
$slika62="mange/".time()."62.".$ext;
move_uploaded_file($_FILES["slika62"]["tmp_name"],$slika62);}
else {$slika62="";}


// slika 63
if(!empty($_FILES["slika63"]["name"])) {
$niz=explode(".",$_FILES["slika63"]["name"]);
$ext=$niz[1];	
$slika63="mange/".time()."63.".$ext;
move_uploaded_file($_FILES["slika63"]["tmp_name"],$slika63);}
else {$slika63="";}


// slika 64
if(!empty($_FILES["slika64"]["name"])) {
$niz=explode(".",$_FILES["slika64"]["name"]);
$ext=$niz[1];	
$slika64="mange/".time()."64.".$ext;
move_uploaded_file($_FILES["slika64"]["tmp_name"],$slika64);}
else {$slika64="";}


// slika 65
if(!empty($_FILES["slika65"]["name"])) {
$niz=explode(".",$_FILES["slika65"]["name"]);
$ext=$niz[1];	
$slika65="mange/".time()."65.".$ext;
move_uploaded_file($_FILES["slika65"]["tmp_name"],$slika65);}
else {$slika65="";}


// slika 66
if(!empty($_FILES["slika66"]["name"])) {
$niz=explode(".",$_FILES["slika66"]["name"]);
$ext=$niz[1];	
$slika66="mange/".time()."66.".$ext;
move_uploaded_file($_FILES["slika66"]["tmp_name"],$slika66);}
else {$slika66="";}


// slika 67
if(!empty($_FILES["slika67"]["name"])) {
$niz=explode(".",$_FILES["slika67"]["name"]);
$ext=$niz[1];	
$slika67="mange/".time()."67.".$ext;
move_uploaded_file($_FILES["slika67"]["tmp_name"],$slika67);}
else {$slika67="";}


// slika 68
if(!empty($_FILES["slika68"]["name"])) {
$niz=explode(".",$_FILES["slika68"]["name"]);
$ext=$niz[1];	
$slika68="mange/".time()."68.".$ext;
move_uploaded_file($_FILES["slika68"]["tmp_name"],$slika68);}
else {$slika68="";}


// slika 69
if(!empty($_FILES["slika69"]["name"])) {
$niz=explode(".",$_FILES["slika69"]["name"]);
$ext=$niz[1];	
$slika69="mange/".time()."69.".$ext;
move_uploaded_file($_FILES["slika69"]["tmp_name"],$slika69);}
else {$slika69="";}


// slika 70
if(!empty($_FILES["slika70"]["name"])) {
$niz=explode(".",$_FILES["slika70"]["name"]);
$ext=$niz[1];	
$slika70="mange/".time()."70.".$ext;
move_uploaded_file($_FILES["slika70"]["tmp_name"],$slika70);}
else {$slika70="";}


// slika 71
if(!empty($_FILES["slika71"]["name"])) {
$niz=explode(".",$_FILES["slika71"]["name"]);
$ext=$niz[1];	
$slika71="mange/".time()."71.".$ext;
move_uploaded_file($_FILES["slika71"]["tmp_name"],$slika71);}
else {$slika71="";}


// slika 72
if(!empty($_FILES["slika72"]["name"])) {
$niz=explode(".",$_FILES["slika72"]["name"]);
$ext=$niz[1];	
$slika72="mange/".time()."72.".$ext;
move_uploaded_file($_FILES["slika72"]["tmp_name"],$slika72);}
else {$slika72="";}


// slika 73
if(!empty($_FILES["slika73"]["name"])) {
$niz=explode(".",$_FILES["slika73"]["name"]);
$ext=$niz[1];	
$slika73="mange/".time()."73.".$ext;
move_uploaded_file($_FILES["slika73"]["tmp_name"],$slika73);}
else {$slika73="";}


// slika 74
if(!empty($_FILES["slika74"]["name"])) {
$niz=explode(".",$_FILES["slika74"]["name"]);
$ext=$niz[1];	
$slika74="mange/".time()."74.".$ext;
move_uploaded_file($_FILES["slika74"]["tmp_name"],$slika74);}
else {$slika74="";}


// slika 75
if(!empty($_FILES["slika75"]["name"])) {
$niz=explode(".",$_FILES["slika75"]["name"]);
$ext=$niz[1];	
$slika75="mange/".time()."75.".$ext;
move_uploaded_file($_FILES["slika75"]["tmp_name"],$slika75);}
else {$slika75="";}


// slika 76
if(!empty($_FILES["slika76"]["name"])) {
$niz=explode(".",$_FILES["slika76"]["name"]);
$ext=$niz[1];	
$slika76="mange/".time()."76.".$ext;
move_uploaded_file($_FILES["slika76"]["tmp_name"],$slika76);}
else {$slika76="";}


// slika 77
if(!empty($_FILES["slika77"]["name"])) {
$niz=explode(".",$_FILES["slika77"]["name"]);
$ext=$niz[1];	
$slika77="mange/".time()."77.".$ext;
move_uploaded_file($_FILES["slika77"]["tmp_name"],$slika77);}
else {$slika77="";}


// slika 78
if(!empty($_FILES["slika78"]["name"])) {
$niz=explode(".",$_FILES["slika78"]["name"]);
$ext=$niz[1];	
$slika78="mange/".time()."78.".$ext;
move_uploaded_file($_FILES["slika78"]["tmp_name"],$slika78);}
else {$slika78="";}


// slika 79
if(!empty($_FILES["slika79"]["name"])) {
$niz=explode(".",$_FILES["slika79"]["name"]);
$ext=$niz[1];	
$slika79="mange/".time()."79.".$ext;
move_uploaded_file($_FILES["slika79"]["tmp_name"],$slika79);}
else {$slika79="";}


// slika 80
if(!empty($_FILES["slika80"]["name"])) {
$niz=explode(".",$_FILES["slika80"]["name"]);
$ext=$niz[1];	
$slika80="mange/".time()."80.".$ext;
move_uploaded_file($_FILES["slika80"]["tmp_name"],$slika80);}
else {$slika80="";}


// slika 81
if(!empty($_FILES["slika81"]["name"])) {
$niz=explode(".",$_FILES["slika81"]["name"]);
$ext=$niz[1];	
$slika81="mange/".time()."81.".$ext;
move_uploaded_file($_FILES["slika81"]["tmp_name"],$slika81);}
else {$slika81="";}


// slika 82
if(!empty($_FILES["slika82"]["name"])) {
$niz=explode(".",$_FILES["slika82"]["name"]);
$ext=$niz[1];	
$slika82="mange/".time()."82.".$ext;
move_uploaded_file($_FILES["slika82"]["tmp_name"],$slika82);}
else {$slika82="";}


// slika 83
if(!empty($_FILES["slika83"]["name"])) {
$niz=explode(".",$_FILES["slika83"]["name"]);
$ext=$niz[1];	
$slika83="mange/".time()."83.".$ext;
move_uploaded_file($_FILES["slika83"]["tmp_name"],$slika83);}
else {$slika83="";}


// slika 84
if(!empty($_FILES["slika84"]["name"])) {
$niz=explode(".",$_FILES["slika84"]["name"]);
$ext=$niz[1];	
$slika84="mange/".time()."84.".$ext;
move_uploaded_file($_FILES["slika84"]["tmp_name"],$slika84);}
else {$slika84="";}


// slika 85
if(!empty($_FILES["slika85"]["name"])) {
$niz=explode(".",$_FILES["slika85"]["name"]);
$ext=$niz[1];	
$slika85="mange/".time()."85.".$ext;
move_uploaded_file($_FILES["slika85"]["tmp_name"],$slika85);}
else {$slika85="";}


// slika 86
if(!empty($_FILES["slika86"]["name"])) {
$niz=explode(".",$_FILES["slika86"]["name"]);
$ext=$niz[1];	
$slika86="mange/".time()."86.".$ext;
move_uploaded_file($_FILES["slika86"]["tmp_name"],$slika86);}
else {$slika86="";}


// slika 87
if(!empty($_FILES["slika87"]["name"])) {
$niz=explode(".",$_FILES["slika87"]["name"]);
$ext=$niz[1];	
$slika87="mange/".time()."87.".$ext;
move_uploaded_file($_FILES["slika87"]["tmp_name"],$slika87);}
else {$slika87="";}


// slika 88
if(!empty($_FILES["slika88"]["name"])) {
$niz=explode(".",$_FILES["slika88"]["name"]);
$ext=$niz[1];	
$slika88="mange/".time()."88.".$ext;
move_uploaded_file($_FILES["slika88"]["tmp_name"],$slika88);}
else {$slika88="";}


// slika 89
if(!empty($_FILES["slika89"]["name"])) {
$niz=explode(".",$_FILES["slika89"]["name"]);
$ext=$niz[1];	
$slika89="mange/".time()."89.".$ext;
move_uploaded_file($_FILES["slika89"]["tmp_name"],$slika89);}
else {$slika89="";}


// slika 90
if(!empty($_FILES["slika90"]["name"])) {
$niz=explode(".",$_FILES["slika90"]["name"]);
$ext=$niz[1];	
$slika90="mange/".time()."90.".$ext;
move_uploaded_file($_FILES["slika90"]["tmp_name"],$slika90);}
else {$slika90="";}


// slika 91
if(!empty($_FILES["slika91"]["name"])) {
$niz=explode(".",$_FILES["slika91"]["name"]);
$ext=$niz[1];	
$slika91="mange/".time()."91.".$ext;
move_uploaded_file($_FILES["slika91"]["tmp_name"],$slika91);}
else {$slika91="";}


// slika 92
if(!empty($_FILES["slika92"]["name"])) {
$niz=explode(".",$_FILES["slika92"]["name"]);
$ext=$niz[1];	
$slika92="mange/".time()."92.".$ext;
move_uploaded_file($_FILES["slika92"]["tmp_name"],$slika92);}
else {$slika92="";}


// slika 93
if(!empty($_FILES["slika93"]["name"])) {
$niz=explode(".",$_FILES["slika93"]["name"]);
$ext=$niz[1];	
$slika93="mange/".time()."93.".$ext;
move_uploaded_file($_FILES["slika93"]["tmp_name"],$slika93);}
else {$slika93="";}


// slika 94
if(!empty($_FILES["slika94"]["name"])) {
$niz=explode(".",$_FILES["slika94"]["name"]);
$ext=$niz[1];	
$slika94="mange/".time()."94.".$ext;
move_uploaded_file($_FILES["slika94"]["tmp_name"],$slika94);}
else {$slika94="";}


// slika 95
if(!empty($_FILES["slika95"]["name"])) {
$niz=explode(".",$_FILES["slika95"]["name"]);
$ext=$niz[1];	
$slika95="mange/".time()."95.".$ext;
move_uploaded_file($_FILES["slika95"]["tmp_name"],$slika95);}
else {$slika95="";}


// slika 96
if(!empty($_FILES["slika96"]["name"])) {
$niz=explode(".",$_FILES["slika96"]["name"]);
$ext=$niz[1];	
$slika96="mange/".time()."96.".$ext;
move_uploaded_file($_FILES["slika96"]["tmp_name"],$slika96);}
else {$slika96="";}


// slika 97
if(!empty($_FILES["slika97"]["name"])) {
$niz=explode(".",$_FILES["slika97"]["name"]);
$ext=$niz[1];	
$slika97="mange/".time()."97.".$ext;
move_uploaded_file($_FILES["slika97"]["tmp_name"],$slika97);}
else {$slika97="";}


// slika 98
if(!empty($_FILES["slika98"]["name"])) {
$niz=explode(".",$_FILES["slika98"]["name"]);
$ext=$niz[1];	
$slika98="mange/".time()."98.".$ext;
move_uploaded_file($_FILES["slika98"]["tmp_name"],$slika98);}
else {$slika98="";}


// slika 99
if(!empty($_FILES["slika99"]["name"])) {
$niz=explode(".",$_FILES["slika99"]["name"]);
$ext=$niz[1];	
$slika99="mange/".time()."99.".$ext;
move_uploaded_file($_FILES["slika99"]["tmp_name"],$slika99);}
else {$slika99="";}


// slika 100
if(!empty($_FILES["slika100"]["name"])) {
$niz=explode(".",$_FILES["slika100"]["name"]);
$ext=$niz[1];	
$slika100="mange/".time()."100.".$ext;
move_uploaded_file($_FILES["slika100"]["tmp_name"],$slika100);}
else {$slika100="";}

// slika 101
if(!empty($_FILES["slika101"]["name"])) {
$niz=explode(".",$_FILES["slika101"]["name"]);
$ext=$niz[1];	
$slika101="mange/".time()."101.".$ext;
move_uploaded_file($_FILES["slika101"]["tmp_name"],$slika101);}
else {$slika101="";}


$sql="INSERT INTO mange (tip, naziv, poglavlja, trajanje, datum, opis, slika1, slika2, slika3, slika4, slika5, slika6, slika7, slika8, slika9, slika10, slika11, slika12, slika13, slika14, slika15, slika16, slika17, slika18, slika19, slika20, slika21, slika22, slika23, slika24, slika25, slika26, slika27, slika28, slika29, slika30, slika31, slika32, slika33, slika34, slika35, slika36, slika37, slika38, slika39, slika40, slika41, slika42, slika43, slika44, slika45, slika46, slika47, slika48, slika49, slika50, slika51, slika52, slika53, slika54, slika55, slika56, slika57, slika58, slika59, slika60, slika61, slika62, slika63, slika64, slika65, slika66, slika67, slika68, slika69, slika70, slika71, slika72, slika73, slika74, slika75, slika76, slika77, slika78, slika79, slika80, slika81, slika82, slika83, slika84, slika85, slika86, slika87, slika88, slika89, slika90, slika91, slika92, slika93, slika94, slika95, slika96, slika97, slika98, slika99, slika100, slika101) VALUES ('$tip', '$naziv', '$poglavlja', '$trajanje', '$datum', '$opis', '$slika1', '$slika2', '$slika3', '$slika4', '$slika5', '$slika6', '$slika7', '$slika8', '$slika9', '$slika10', '$slika11', '$slika12', '$slika13', '$slika14', '$slika15', '$slika16', '$slika17', '$slika18', '$slika19', '$slika20', '$slika21', '$slika22', '$slika23', '$slika24', '$slika25', '$slika26', '$slika27', '$slika28', '$slika29', '$slika30', '$slika31', '$slika32', '$slika33', '$slika34', '$slika35', '$slika36', '$slika37', '$slika38', '$slika39', '$slika40', '$slika41', '$slika42', '$slika43', '$slika44', '$slika45', '$slika46', '$slika47', '$slika48', '$slika49', '$slika50', '$slika51', '$slika52', '$slika53', '$slika54', '$slika55', '$slika56', '$slika57', '$slika58', '$slika59', '$slika60', '$slika61', '$slika62', '$slika63', '$slika64', '$slika65', '$slika66', '$slika67', '$slika68', '$slika69', '$slika70', '$slika71', '$slika72', '$slika73', '$slika74', '$slika75', '$slika76', '$slika77', '$slika78', '$slika79', '$slika80', '$slika81', '$slika82', '$slika83', '$slika84', '$slika85', '$slika86', '$slika87', '$slika88', '$slika89', '$slika90', '$slika91', '$slika92', '$slika93', '$slika94', '$slika95', '$slika96', '$slika97', '$slika98', '$slika99', '$slika100', '$slika101')";
mysqli_query($conn,$sql);
header("Location: controlp-unosmangi.php");
?>