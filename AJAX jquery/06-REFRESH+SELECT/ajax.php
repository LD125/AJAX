<?php

require_once('init.php');
extract($_POST);

$tab = array();
$tab['resultat'] = '';

$result = $pdo->prepare('SELECT * FROM employes ORDER BY nom');
$result->execute();

$tab['resultat'] .= '<table border="5"><tr>';

$nbcolonnes = $result->columnCount();
for ( $i=0; $i < $nbcolonnes; $i++ ){
    $infoscolonnes = $result->getColumnMeta($i);
    $tab['resultat'] .= '<th>'.$infoscolonnes['name'].'</th>';

}
$tab['resultat'] .= "</tr>";

while ($ligne = $result->fetch(PDO::FETCH_ASSOC))
{
    $tab['resultat'] .= "<tr>";
        foreach($ligne as $information){
            $tab['resultat'] .= "<td>$information</td>";

        }
        $tab['resultat'] .= "</tr>";
}
$tab['resultat'] .= "</table>";
$tab['validation'] = 'ok';

echo json_encode($tab);
?>