
<?php

require_once("init.inc.php");// pour la connection à la base de donnée à partir du fichier php
// faire la requete d'insertion pour inserer un prenom dans la bdd via le formulaire html
$resultat = $pdo -> exec("INSERT INTO employes (prenom) VALUES ('$_POST[personne]')");
