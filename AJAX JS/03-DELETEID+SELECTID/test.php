
<?php

$tab = array();
$tab['individu'] = 'pierre durand';
$tab['age'] = 27;
$tab['adresse']['rue'] = 'rue de la vie'; 

$json =json_encode($tab);

var_dump($json);
    
?>
