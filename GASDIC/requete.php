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
$ville = $_POST['ville'];
$codepostal = $_POST['codepostal'];
$adresse = $_POST['adresse'];
$nomBat = $_POST['nomBat'];
$email = $_POST['email'];
$infoSup = $_POST['infoSup'];

// Requête d'insertion dans la table 'batiments'
$sql = "INSERT INTO `Requete` (ville, code_postal, adresse, NomBat, email, prblm) VALUES ('$ville', '$codepostal', '$adresse', '$nomBat', '$email', '$infoSup')";

if (mysqli_query($conn, $sql)) {
    echo "Enregistrement effectué avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
