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
$sql = "SELECT id, type_déchets, taux_remplissage FROM Poubelle WHERE id=1";
$result = $conn->query($sql);

// Boucle pour parcourir les résultats de la requête SQL
$data = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Ajout des données à la chaîne de caractères
        $data .= $row["id"] . ":" . $row["type_déchets"] . ":" . $row["taux_remplissage"] . ":";
        echo "<p>" . $row["taux_remplissage"]."</p>"; 
    }
}

// Fermeture de la connexion à la base de données
$conn->close();

// Envoi de la chaîne de caractères en liaison série
$serial_port = fopen("COM3", "w");
fwrite($serial_port, $data);
fclose($serial_port);
?>