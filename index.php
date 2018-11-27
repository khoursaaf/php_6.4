<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice</title>
  </head>
  <body>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?language=PHP&server=LAMP</p>
    <a href="index.php?language=PHP&server=LAMP">Afficher dans url!</a>
    <?php
    if (isset($_GET['language']) && isset($_GET['server'])) { ?>
    <p>
      <?= 'Les paramètres sont bien présent.'; ?>
    </p>
    <?php
    }
    else {
    ?>
    <p>
      <?= 'Les paramètres ne sont pas présent'; }?>
    </p>
  </body>
</html>
