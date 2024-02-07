<?php
session_start();

if( isset($_SESSION["compteur"])  )
{
    $_SESSION["compteur"] ++;
}
else
{
    $_SESSION["compteur"] = 1;
}

// if(isset($compteur)){
//     $compteur++;
// }
// else{
//     $compteur = 1;
// }

if(!isset($_GET["nom"]) || !isset($_GET["age"]))
{
    die("Parametres manquants!");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bonjour <?php echo $_GET["nom"] ?>, <br>
    Vous avez visité le site <?= $_SESSION["compteur"] ?> fois et vous avez <?= $_GET["age"] ?> ans.
</body>
</html>