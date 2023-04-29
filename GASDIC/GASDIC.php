<!DOCTYPE html>
<html lang="fr">
    <title>GASDIC</title>
    <link rel="shortcut icon" href="poubelle.ico" type="image/x-icon">
    <link rel="stylesheet" href="stylesheet1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta https-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="progress.css" />
    <head>
    <nav>
        <ul>
            <li class="menu-deroulant">
                <a href="#"></a>
                <ul class="sous-menu">
                    <li><a href="info.html">Informations</a></li>
                    <li><a href=""></a></li>
                    <li><a href="contact.html">Contact</a></a></li>
                </ul>
            </li>
            <li><h1>GASDIC</h1></li> 
            <a href="GASDIC.php"><img id="logo" src="ordures.png" style="width: 150" height= "150"></a>
        </ul>
</head>
<div id="nomBat">
<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "GASDIC";
$password = "password";
$dbname = "Remplissage";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Requête pour extraire les données de la table "Plantes"
$sql = "SELECT id, Nom_Bat FROM Batiment WHERE id=4";
$result = $conn->query($sql);

// Boucle pour parcourir les résultats de la requête SQL
$data = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Ajout des données à la chaîne de caractères
        $data .= $row["id"] . ":" . $row["Nom_Bat"] . ":";
        echo "<p>" . $row["Nom_Bat"]."</p>"; 
    }
}

// Fermeture de la connexion à la base de données
$conn->close();

// Envoi de la chaîne de caractères en liaison série
$serial_port = fopen("COM3", "w");
fwrite($serial_port, $data);
fclose($serial_port);
?>
</div>
<?php
$servername = "localhost";
$username = "GASDIC";
$password = "password";
$dbname = "Remplissage";
?>
    <body>
    <h2>Accueil</h2>   
    <div class="flex-container">
    <table id="tableau" border="2" align="bottom" bgcolor="gray">
        <tbody>
        <tr>
            <td><div role="progressbar" aria-valuemin="0" aria-valuemax="100" style="--value:<?php
            $servername = "localhost";
            $username = "GASDIC";
            $password = "password";
            $dbname = "Remplissage";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connexion échouée : " . $conn->connect_error);
            }
            
            $sql = "SELECT id, type_déchets, taux_remplissage FROM Poubelle WHERE id=1";
            $result = $conn->query($sql);
            
            $data = "";
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data .= $row["id"] . ":" . $row["type_déchets"] . ":" . $row["taux_remplissage"] . ":";
                    echo $row["taux_remplissage"]; 
                }
            }
            
            $conn->close();
            
            $serial_port = fopen("COM3", "w");
            fwrite($serial_port, $data);
            fclose($serial_port);
            ?>"></div></td>
            <td><div role="progressbar" aria-valuemin="0" aria-valuemax="100" style="--value:
            <?php
            $servername = "localhost";
            $username = "GASDIC";
            $password = "password";
            $dbname = "Remplissage";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connexion échouée : " . $conn->connect_error);
            }
            
            $sql = "SELECT id, type_déchets, taux_remplissage FROM Poubelle WHERE id=2";
            $result = $conn->query($sql);
            
            $data = "";
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data .= $row["id"] . ":" . $row["type_déchets"] . ":" . $row["taux_remplissage"] . ":";
                    echo $row["taux_remplissage"]; 
                }
            }
            
            $conn->close();
            
            $serial_port = fopen("COM3", "w");
            fwrite($serial_port, $data);
            fclose($serial_port);
            ?>
            "></div></td>
            <td><div role="progressbar" aria-valuemin="0" aria-valuemax="100" style="--value:<?php
            $servername = "localhost";
            $username = "GASDIC";
            $password = "password";
            $dbname = "Remplissage";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connexion échouée : " . $conn->connect_error);
            }
            
            $sql = "SELECT id, type_déchets, taux_remplissage FROM Poubelle WHERE id=3";
            $result = $conn->query($sql);
            
            $data = "";
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data .= $row["id"] . ":" . $row["type_déchets"] . ":" . $row["taux_remplissage"] . ":";
                    echo $row["taux_remplissage"]; 
                }
            }
            
            $conn->close();
            
            $serial_port = fopen("COM3", "w");
            fwrite($serial_port, $data);
            fclose($serial_port);
            ?>"></div></td>
            <td><div role="progressbar" aria-valuemin="0" aria-valuemax="100" style="--value:<?php
            $servername = "localhost";
            $username = "GASDIC";
            $password = "password";
            $dbname = "Remplissage";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connexion échouée : " . $conn->connect_error);
            }
            
            $sql = "SELECT id, type_déchets, taux_remplissage FROM Poubelle WHERE id=4";
            $result = $conn->query($sql);
            
            $data = "";
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data .= $row["id"] . ":" . $row["type_déchets"] . ":" . $row["taux_remplissage"] . ":";
                    echo $row["taux_remplissage"]; 
                }
            }
            
            $conn->close();
            
            $serial_port = fopen("COM3", "w");
            fwrite($serial_port, $data);
            fclose($serial_port);
            ?>"></div></td>
        </tr>
        <tr>
        <div id="poubelle">
            <td><img src="poubelle-grise.jpg" style="width: 300" height= "300"></td>
            <td><img src="poubelle-bleu.jpg" style="width: 400" height= "400"></td>
            <td><img src="poubelle-jaune.jpg" style="width: 400" height= "400"></td>
            <td><img src="poubelle-verte.jpg" style="width: 400" height= "400"></td>
        </div>
        </tr>
        <tr>
        <td colspan="4">
        <h3>
            <p>Il s’agit d’automatiser le tri sélectif dans les immeubles collectifs en utilisant les anciennes colonnes VO.</p>
        <p>Configuration d'exploitation :</p><br>

   <p>Gérer le dépôt :</p>
<p>Chaque trappe vide ordure sera équipée de  :</p>
<p>4 boutons permettant de choisir le type de déchets que l'on veut déposer, un système de condamnation, un avertisseur sonore d’oubli de fermeture de trappe, un système de validation du dépôt (capteur de passage déchet) et une liaison sans fils vers la centrale de gestion.</p><br>
<p>D’une led rouge :</p>
<p>led allumée : Dépôt en cours autorisé ->  Ouverture de la trappe autorisé</p>
<p>led clignotante: Demande de dépôt en cours de traitement</p>
<p>led clignotante puis éteinte: Dépot impossible -> Autre dépôt en cours ou système défaillant. </p><br>
 
<p>Gérer les conteneurs : </p>
<p>Le local à ordures dispose de 4 conteneurs avec des couvercles de couleurs différentes .
<p>gris : Ordures ménagères.</p>
<p>bleu : Papier/carton .  </p>
<p>jaune : plastique.</p>
<p>vert : verre.</p>
<p>Un système permet de positionner le bon conteneur en fonction de la demande, il sera équipé d’un capteur de passage pour valider l'arrivée du déchet en bas de la colonne.
Le niveau de chaque conteneur sera mesuré et renvoyé au système de gestion et ces niveaux. seront initialisés par le personnel lors du changement de conteneur.
Une liaison sans fil permet la communication avec la centrale de gestion.</p></h3>
        </td>
        </tr>

        </tbody>
    </table>
        </div>
        </body>
        </html>
