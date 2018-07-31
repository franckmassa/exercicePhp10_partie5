<?php
//Déclaration de la variable haut De France avec pour index le numéro des départements
$hautDeFrance = array('60' => 'Oise', '02' => 'Aisne',
'80' => 'Somme', '59' => 'Nord', '62' => 'Pas-De-Calais');
?><!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice10</title>
</head>
<body>
  <p>
    <?php
    //Création d'une boucle pour récupérer toutes les valeurs du tableau et leurs clés
    foreach($hautDeFrance as $key => $department){
      echo 'Le Département ' . $department . ' a le numéro ' . $key . '<br/>';
    }
    ?>
  </p>
</body>
</html>
