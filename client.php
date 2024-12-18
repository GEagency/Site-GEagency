<?php
$user = "eleve.tou"; 
$pass = "Zio2Xuet"; 
$db = "Garoulette_ArisB_BaptisteB"; 

$link = mysqli_connect("localhost", $user, $pass, $db);
if (!$link) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if (!empty($_POST["NumClient"]) && !empty($_POST["NomClient"]) && !empty($_POST["AdresseClient"]) && !empty($_POST["Telephone"])) {
    $NumClient = $_POST["NumClient"];
    $NomClient = $_POST["NomClient"];
    $AdresseClient = $_POST["AdresseClient"];
    $Telephone = $_POST["Telephone"];

    $requete = "UPDATE Clients SET NomClient = '$NomClient', AdresseClient = '$AdresseClient', Telephone = '$Telephone' WHERE NumClient_ = $NumClient";

    if (mysqli_query($link, $requete)) {
        echo "<h1>Mise à jour réussie</h1>";
    } else {
        echo "<h1>Erreur lors de la mise à jour : " . mysqli_error($link) . "</h1>";
    }

} else {
    echo "<h1>Erreur : Tous les champs doivent être remplis.</h1>";
}

mysqli_close($link);
?>
