<?php
$age = 15;
$gender = 'femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHPpartie2exo2</title>
  </head>
  <body>
    <p>
      <?php
        if ($age >= 18 AND $gender == 'homme') {
          echo 'Vous êtes un homme et vous êtes majeur';
        }elseif ($age < 18 AND $gender == 'homme') {
          echo 'Vous êtes un homme et vous êtes mineur';
        }
        if ($age >= 18 AND $gender == 'femme') {
          echo 'Vous êtes une femme et vous êtes majeur';
        }elseif ($age < 18 AND $gender == 'femme') {
          echo 'Vous êtes une femme et vous êtes mineur';
        }
      ?>
    </p>
  </body>
</html>
