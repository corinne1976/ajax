
<?php
// faire le traitement pour afficher dans un tableau le nom guillaume
require_once("init.inc.php");

$tab = array();
$tab['monresultat'] = '';

$resultat = $pdo -> query("SELECT * FROM employes WHERE prenom = '$_POST[personne]'");

$tab['monresultat'] .= '<table border="10">';

$tab['monresultat'] .= '<tr>';

for($i = 0; $i < $resultat->columnCount(); $i++ ){// compter le nombre de collones
   $colonne = $resultat->getColumnMeta($i);// permet d'afficher un tableau associatif
   $tab['monresultat'] .= '<th>' . $colonne['name'] . '</th>';
}
$tab['monresultat'] .= '</tr>';

while($enregistrement = $resultat -> fetch(PDO::FETCH_ASSOC)){
    foreach($enregistrement as $valeur){
        $tab['monresultat'] .= '<td>' . $valeur . '</td>';

    }
    $tab['monresultat'] .= '</tr><br>';
}

//echo $tab['monresultat'];

// $f=fopen('test.txt', 'a');
// fwrite($f, json_encode($tab));
echo json_encode($tab);// json_encode permet de transformer le tableau array au bon format
// ce format (json) assure la possibilité de transporter les données , sans json nous ne pouvons pas transporteer les données


?>
