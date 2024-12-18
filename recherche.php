<html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Utilisateur</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff8c42, #ff3b3b);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* Form Container */
        .container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 90%;
            max-width: 600px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .container h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        /* Table Styles */
        table {
            width: 100%;
            margin-top: 1rem;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #fff;
        }

        th, td {
            padding: 0.8rem;
            text-align: left;
        }

        th {
            background-color: rgba(255, 255, 255, 0.2);
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Back Button */
        .btn-back {
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            background-color: #444;
            padding: 0.6rem 1.2rem;
            border-radius: 20px;
            transition: all 0.3s ease-in-out;
            display: inline-block;
        }

        .btn-back:hover {
            background-color: #222;
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<head>
<title>Connexion utilisateur</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF">
<?php

$user = "eleve.tou"; 
$pass = "Zio2Xuet"; 
$db = "Garoulette_ArisB_BaptisteB"; // mettre votre nom de base de donn�es
$link = mysqli_connect( "localhost", $user, $pass ); 
if ( ! $link ) die( "Impossible de se connecter � MySQL" ); 
mysqli_select_db($link, $db ) or die ( "Impossible d'ouvrir $db: ".mysql_error()); 
$result = mysqli_query($link, "SELECT NomPlanche,NumPlanche,Stock,NumFacture FROM 	ModelesPlanches	 WHERE NomPlanche LIKE '%".$_GET['recherche']."%'" );
print("<table border=1>\n");
print("<tr><th>Désignation de l'article</th><th>Catégorie de l'article</th><th>Prix</th>");
$trouve = false;
while ( $uneLigne = mysqli_fetch_row( $result ) )
     {
		 $trouve = true;
       print ("<tr>\n");
	   print ("\t<td>$uneLigne[0]</td>\n");
	   print ("\t<td>$uneLigne[1]</td>\n");
	   print ("\t<td>$uneLigne[2]</td>\n");
       print ("</tr>\n");
     }
print ("</table>\n");
if($trouve == false)
{
	print("<br />Aucun r�sultat");
	
}

mysqli_close( $link );
?>
</body>
</html>
