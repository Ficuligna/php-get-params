<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Email</title>
  </head>
  <body>
    <a href="http://localhost/mail_autentication.php?email=marco@ehehe.ohohoh">Gettami l'email</a>
    <?php
      $email = $_GET["email"];
      if (strstr($email,".") && strstr($email,"@")) {
        echo "<div> Accesso Consentito </div>";
      }else {
        echo "<div> Accesso Negato </div>";
      };
     ?>
  </body>
</html>
