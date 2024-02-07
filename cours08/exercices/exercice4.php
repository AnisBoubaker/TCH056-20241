<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_REQUEST["nom"])){
        echo "Vous avez saisi<br>";
        echo "Nom: ".$_REQUEST["nom"]."<br>";
        echo "Prenom: ".$_REQUEST["prenom"]."<br>";
        echo "Courriel: ".$_REQUEST["courriel"]."<br>";
    }
    ?>

    <form action="./exercice4.php" method="get">
        Nom: <input type="text" name="nom"><br>
        Prenom: <input type="text" name="prenom"><br>
        Courriel: <input type="text" name="courriel"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>