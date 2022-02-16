<?php 
include('database/database.php');
 
    $sexe = $_POST['sexe'];
    $nom = $_POST['nom'];

    $jour = date('d');
    $mois = date('m');
    $annee = date('yyyy');

    $date = $jour.$mois.$annee;

    if($sexe == "homme" or $sexe == "1")
    {
        $sexe = 'h';
    }
    elseif($sexe == "femme" or $sexe == "0")
    {
        $sexe = 'f';
    }

    $ins = $mysqli->prepare('INSERT into datawh (sexe, nom, date) VALUES (?, ?, ?)');
    $ins->execute(array($sexe, $nom, $date));

if($ins)
{
    // $ins->closeCursor();
    echo 1;
}
else
{
    echo 2;
}


?>