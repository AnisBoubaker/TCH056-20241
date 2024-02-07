<?php
//Inclure le fichier fonctions.php ici
require './fonctions.php';

$produits = [
    ["nom" => "Produit A", 
    "prix" => 20.99, 
    "categorie" => "Catégorie 1"],
    ["nom" => "Produit B", 
    "prix" => 15.69, 
    "categorie" => "Catégorie 2"],
    ["nom" => "Produit C", 
    "prix" => 9.99, 
    "categorie" => "Catégorie 1"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo produitsHTML($produits);
    ?>
</body>
</html>