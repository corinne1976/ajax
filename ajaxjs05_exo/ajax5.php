<?php

require_once("init.inc.php");// pour la connection à la base de donnée à partir du fichier php
// faire la requete d'insertion pour inserer un prenom dans la bdd via le formulaire html
$result = $pdo -> exec("DELETE FROM employes WHERE prenom  = '$_POST[personne]'");



$tab = array();
$tab['monresultat'] = '';


$result = $pdo->query('SELECT * FROM employes');
$tab['monresultat'] .= '<select name="personne" id="personne">';
while ($employes = $result->fetch(PDO::FETCH_ASSOC)) {
  $tab['monresultat'] .= "<option>$employes[prenom]</option>";
}
$tab['monresultat'] .= '</select>';

//echo $tab['monresultat'];

echo  json_encode($tab);
