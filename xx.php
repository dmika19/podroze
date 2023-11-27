<html>

<head>
  <META charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="wypis.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="info.css">
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
          renderMessege();
          ?>
        </div>
      </div>
    </div>

    <div class="footer">
    Kontakt do nas :))<br>
      Tel.: 555-432-100 <br>
      E-mail: kontakt@kachadomka_shrek.com
    </div>
  </div>

  <?php
    function renderMessege(){
        if(isset($_GET["result"])){
            if($_GET["result"]!=-1){ /* != to przeciwienstwo ==, różne  */
                echo "<h1>Usunięcie się powiodło</h1>";
            }
            else{
                echo "<h1>Usunięcie się nie powiodło</h1>";
            }
        }
        else{
            header('Location: usuw_schronisko.php');
            exit();
        }
    }
  
    
  
  ?>
</body>

</html>