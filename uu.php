<?php
/*usuwanie poprzez plik pośredni tu jest robione jak coś               */

$con = new mysqli("127.0.0.1","root","","blog");
$a = $_GET["id"];
$q="DELETE FROM wpisy WHERE id='".$a."'";
 if($wynik=$con->query($q)){
    header('Location: xx.php?result='.$wynik);
exit();
 }

?>
