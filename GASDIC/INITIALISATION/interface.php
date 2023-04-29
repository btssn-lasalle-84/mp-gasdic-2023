<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <meta charset='utf-8'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta https-equiv="X-UA-Compatible" content="ie=edge" />
    <head>
       <title>Interface de première utilisation</title>
   </head>
   <header>
    <h1>Initialisation du système GASDIC</h1>
   </header>
    <table border="1", align="bottom">
    <thead>
        <tr>
            <th colspan="2">A propos du bâtiment :</th>
        </tr>
        <br>
    </thead>
    <tbody>
        <form action="recup.php" method="post">
        <tr>
            <td align="center"><label for="NbEtage">Renseignez le nombre d'étages du batiment :</label></td>
            <td><div><input type="number" id="NbEtage" name="etage"></div></td>
        </tr>
        <tr>
            <td align="center"><label for="ville">La ville :</label></td>
            <td><div><input type="text" id="ville" name="ville" placeholder="Ex : Avignon"></div></td>
        </tr>
        <tr>
            <td align="center"><label for="codepostal">Le code postal :</label></td>
                <td><div><input type="number" id="codepostal" name="codepostal" placeholder="Ex : 84000"></div></td>
        </tr>
        <tr>
            <td align="center"><label for="adresse">L'adresse du bâtiment :</label></td>
            <td><div><input type="text" id="adresse" name="adresse"></div></td>
        </tr>
        <tr>
            <td align="center"><label for="nomBat">Le nom du bâtiment :</label></td>
            <td><div><input type="text" id="nomBat" name="nomBat"></div></td>
            <?php
            session_start();
            $_SESSION ["nomBat"] = $_POST["nomBat"];
            session_write_close();
            ?>
        
        </tr>
        <tr>
            <td align="center"><label for="infoSup">Informations supplémentaires sur le bâtiment :</label></td>
            <td><div><input type="text" id="infoSup" name="infoSup"></div></td>
        </tr>
        <tr>
            <td align="center"><label for="email">Courriel en cas d'urgence</label></td>
            <td><div><input type="email" id="email" name="email" placeholder="courriel@exemple.com"></div></td>
        </tr>
    </form>
    <form method="post" href="recup.php">
        <input type="button" value="Envoyer les données">
    </form>
        </tbody>
</table>
</html>