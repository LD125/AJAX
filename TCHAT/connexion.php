<?php

require_once('inc/init.php');

//traitement du formulaire en post
if ( isset($_POST['connexion']) ) // si on clique sur connexion

{
    $resultat = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
    $resultat->execute(array('pseudo' => $_POST['pseudo']) );

    if ( $resultat->rowCount() == 0 )
    {
        // insertion en base d'un nouveau membre
    }
    elseif( $resultat->rowCount()>0 && $membre['ip'] == $_SERVER['REMOTE_ADDR'] )
    {
        /* Le pseudo est connu et l'internaut est proprietaire du pseudo (meme IP) */
        // On met à jour la date de connexion
    }

else
{
    $msg .= '<div class="erreur">Ce pseudo est déjà reservé</div>';
}
    if(empty($msg))
    {
        // remplir $_SESSION et rediriger vers index.php
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="inc/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 push-well">
            <?= $msg ?>
            <fieldset>
                <form action="" method="post">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input class="form-control" type="text" name="pseudo" id="pseudo" value="pseudo">
                    </div>
                <div class="form-group">
                    <label for="civilite">Civilité</label>
                    <input type="radio" name="civilite" id="civilite" value="f" checked> Femme
                    <input type="radio" name="civilite" id="civilite"> Homme<br>
                    </div>
                <div class="form-group">
                    <label for="=ville">Ville</label>
                    <input class="form-control"  type="text" name="ville" id="ville" value="ville">
                    </div>
                <div class="form-group"> 
                    <label for="date_de_naissance">Date de naissance (YYYY-MM-DD)</label>
                    <input class="form-control"  type="text" name="date_de_naissance" id="date_de_naissance" value="date_de_naissance">
                    </div> 
                <div class="form-group">
                    <input class="form-control"  type="submit" name="connexion" value="Connexion au Tchat!">
                    </div>
                </form>
           </fieldset>
            </div>
        </div>
    </div>
   




</body>
</html>