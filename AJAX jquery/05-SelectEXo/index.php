<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DELETE ID - SELECT ID</title>
</head>
<body>
<form action="#" method="post">
 <?php
            require_once('init.php');
            $result = $pdo->query("SELECT DISTINCT(prenom) FROM employes");
            echo '<select name="personne" id="personne">';
            while ( $employe = $result->fetch(PDO::FETCH_ASSOC))
            {
                echo '<option value="'.$employe['prenom'].'">'.$employe['prenom'].'</option>';
            }
            echo '</select>';

            ?>


<input type="submit" id="submit" value="Voir la liste">
</form>
    <div id="resultat"></div>


    <script src="jquery-3.3.1.min.js"></script>
    <script src="ajax.js"></script>  
</body>
</html>