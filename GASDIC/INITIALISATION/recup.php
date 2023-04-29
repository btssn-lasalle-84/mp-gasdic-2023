<?php
// Connexion à la base de données MySQL
$servername = "localhost";
$username = "GASDIC";
$password = "password";
$dbname = "Remplissage";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}

// Récupération des données du formulaire
$nomBat = $_POST['nomBat'];

// Requête d'insertion dans la table 'batiments'
$sql = "INSERT INTO `Batiment` (`Nom_Bat`) VALUES ('$nomBat')";

if (mysqli_query($conn, $sql)) {
    echo "Enregistrement effectué avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
