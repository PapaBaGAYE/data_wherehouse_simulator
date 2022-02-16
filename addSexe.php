<?php 
include('database/database.php');
 
    $sexe = $_POST['sexe'];
    $nom = $_POST['nom'];

    $jour = date('d');
    $mois = date('m');
    $annee = date('yyyy');

    $date = $jour.$mois.$annee;

    $ins = $mysqli->prepare('INSERT into sex (sexe, nom, date) VALUES (?, ?, ?)');
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