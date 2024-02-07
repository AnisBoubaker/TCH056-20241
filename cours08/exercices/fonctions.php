<?php
//Créer la fonction PHP produitsHTML
function produitsHTML($tab_produits){
    $resultat = "";

    //$resultat = $resultat . "<table>";
    $resultat .= "<table>";
    $resultat .= "<tr><th>Nom</th><th>Prix</th><th>Catégorie</th></tr>";
    foreach($tab_produits as $item)
    {
        $resultat.="<tr>";
        $resultat.="<td>".$item["nom"]."</td>";
        $resultat.="<td>".$item["prix"]."</td>";
        $resultat.="<td>".$item["categorie"]."</td>";
        $resultat.="</tr>";
    }
    $resultat .= "</table>";
    return $resultat;
}
?>