<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 4 : Partie 3</title>
  </head>
  <body>
    <?php
     for ($number = 1; $number <= 10; $number++){
     echo $number . ' ';
     $number +=  $number/2;
     }
    ?>
  </body>
</html>
