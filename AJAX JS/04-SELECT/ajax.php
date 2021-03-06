<?php

require_once('init.php');
extract($_POST);
//je sais que j'ai une entrée 'personne' => 'Laura'
// avec l'extract j'obtiens $personne = 'Laura';

$tab = array();
$tab['resultat'] = '';

$result = $pdo->prepare('SELECT * FROM employes WHERE prenom =:prenom');
$result->execute(array('prenom' => $personne ));

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

echo json_encode($tab);
?>