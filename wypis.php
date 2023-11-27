<html>

<head>
  <META charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="wypis.css">
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
        <a href="index2.html" class="link">Adminpanel</a>
      </div>

      <div class="main">
        <div class="header">
         <a href="index.html"> Blog podróżniczy</a>
        </div>

        <div class="animal_container">
          <?php
          getAnimals();
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
  function renderAnimal($Tytuł, $Autor, $Treść)
  {
    //v to robi wzór który narzucam aby zrobić kształty
    $template = '<div class="animal">
                      

                      <div class="field">
                        <h3>Tytuł</h3>
                        <p>$Tytuł</p>
                      </div>

                      <div class="field">
                        <h3>Autor</h3>
                        <p>$Autor</p>
                      </div>

                      <div class="field">
                        <h3>Treść</h3>
                        <p>$Treść</p>
                      </div>

                      
                

                  </div>';
    $data = array(
      '$Tytuł' => $Tytuł,
      '$Autor' => $Autor,
      '$Treść' => $Treść,
      
    ); //przypisujemy do identyfikatora zawartosc zmiennej

    echo strtr($template, $data);
  }

  function getAnimals()
  {
    $con = new mysqli("127.0.0.1", "root", "", "blog");

    $q = "SELECT * FROM wpisy";

    if ($wynik = $con->query($q)) {


      while ($row = $wynik->fetch_array()) {
        renderAnimal(
          $row["Tytuł"],
          $row["Autor"],
          $row["Treść"],
          
        );
      }
    } else {
      echo "<h1>error</h1>";
    }
  }
  
  ?>
</body>

</html>