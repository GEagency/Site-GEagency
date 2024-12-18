<html>
<head>
<title>Document sans-titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#ff62ee"><?php
$user = "eleve.tou"; 
$pass = "Zio2Xuet"; 
$db = "Garoulette_ArisB_BaptisteB"; 
$link = mysqli_connect( "localhost", $user, $pass ); 
if ( ! $link ) die( "Impossible de se connecter � MySQL" ); 
mysqli_select_db($link, $db ) or die ( "Impossible d'ouvrir $db: ".mysql_error());
$NomPlanche=$_GET["NomPlanche"]; 
$requete = "DELETE FROM ModelesPlanches WHERE NomPlanche='$NomPlanche'";
$result = mysqli_query($link, $requete );
print("<H1>Insertion bien effectu�e</H1>");

mysqli_close($link);
?>
</body>
</html>
