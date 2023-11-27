<html>

<head>
    <META charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gallery.css">
    <title>Podróże małe i duże</title>

</head>

<body>
    <div class="root">
        <div class="content">
            <div class="navigation">
                <div>Nawigacja</div>
                <a href="wypis.php" class="link">Posty</a>
                <a href="4podstrona.html" class="link">Fotki</a>
                <a href="5_podstrona.html" class="link">O nas</a>
                <a href="dodaw.html" class="link">Nowy pościk</a>
                <a href="usuw.php" class="link">Usuń pościk</a>
                <a href="index2.html" class="link">Adminpanel</a>
            </div>

            <div class="main">
                <div class="header">
                    <a href="index.html"> Blog podróżniczy</a>
                </div>
                <div class="site_content">
          <div class="title">Zalogowany jako:
                <?php

$cc=$_GET["login"];
$dd=$_GET["haslo"];


$con = new mysqli("127.0.0.1","root","","blog");
$q="SELECT * FROM logowanie WHERE (login ='$cc' )";
$wynik=$con->query($q);
$row = mysqli_fetch_array($wynik);
 $ff=$row['login'];
 $gg=$row['haslo'];
if(($ff==$cc)&&($gg==$dd))
{
echo ' ' . $ff .  '<br>' ;
}
else 
echo "sprawdz czy napewno dobrze wpisujesz :/";

?>
</div>
</div>
          
              </form>
            </div>

        </div>
        <div class="footer">
            Kontakt do nas :))<br>
      Tel.: 555-432-100 <br>
      E-mail: kontakt@kachadomka_shrek.com
        </div>
    </div>

</body>

</html>