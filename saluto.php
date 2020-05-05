<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Saluto</title>
  </head>
  <body>
    <?php
      $nome = $_GET["nome"];
      $cognome = $_GET["cognome"];
     ?>
     <div class="">
       <?php
        echo "Ciao <br>";
        echo '<a href="http://localhost/saluto.php?nome=Marco&cognome=Randazzo">Cliccami con delicatezza</a> <br>';
        if ($nome == "Marco") {
          echo "Uuh " .$nome ." " .$cognome ."... Sei tu." ;
        };
        ?>
     </div>
  </body>
</html>
