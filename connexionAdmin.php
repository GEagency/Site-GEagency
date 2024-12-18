<html>
<head>
<title>Connexion utilisateur</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF">
<?php

$user = "eleve.tou"; 
$pass = "Zio2Xuet"; 
$db = "Garoulette_ArisB_BaptisteB"; 
$link = mysqli_connect( "localhost", $user, $pass ); 
if ( ! $link ) die( "Impossible de se connecter � MySQL" ); 
mysqli_select_db($link, $db ) or die ( "Impossible d'ouvrir $db: ".mysql_error()); 
$result = mysqli_query($link, "SELECT NomClient,Telephone FROM Clients WHERE Nomclient='".$_GET['NomClient']."' AND Telephone='".$_GET['Telephone']."'" );

if ( $uneLigne = mysqli_fetch_row( $result ) )
     {
       print "Bienvenue dans la boutique";
       header("Location: MenuAdmin.html");
exit();
     }else{
		 print "Erreur : login ou mot de passe incorrect";
		 
	 }
mysqli_close( $link );

?>
</body>
</html>
