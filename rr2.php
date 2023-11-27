<html>

<head>
    <META charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="info.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="form.css">
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
                <div class="adoption_information">
                    <?php
                        displayResult();
                    ?>
                </div>

            </div>

        </div>
        <div class="footer">
        Kontakt do nas :))<br>
      Tel.: 555-432-100 <br>
      E-mail: kontakt@kachadomka_shrek.com
        </div>
</body>
<?php
    function displayResult(){
        $ff=$_GET["Tytuł"];
        $vv=$_GET["Autor"];
        $gg=$_GET["Treść"];

        if(($ff=="" || $ff==null) || ($vv=="" || $vv==null) || ($gg=="" || $gg==null) ){
            displayNoData();
            exit();
        }


        $template='

            <h1>Tytuł</h1>
            <h3 class="mb">$ff</h3>

            <h1>Autor</h1>
            <h3 class="mb">$vv</h3>

            <h1>Treść</h1>
            <h3 class="mb">$gg</h3>
        ';

        $data=array(
            '$ff'=>$ff,
            '$vv'=>$vv,
            '$gg'=>$gg,
        
        );

        echo strtr($template, $data);

        $con = new mysqli("127.0.0.1","root","","blog");
 
        $q="INSERT INTO wpisy (Tytuł, Autor, Treść) VALUES ('".$ff."' , '".$vv."' , '".$gg."'); ";
         $wynik=$con->query($q);

        
        
    }
    function displayNoData(){
        echo '<h1> Nie otrzymano danych </h1>';
    }
?>

</html>