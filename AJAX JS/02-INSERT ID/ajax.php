<?php

require_once('init.php');

extract($_POST);
/*
'personne' => 'francis'

extract va créer $personne = 'Francis';


*/

$result = $pdo->prepare("INSERT INTO employes (prenom) VALUES(:personne)");
$result->execute(array('personne' => $personne));

?>