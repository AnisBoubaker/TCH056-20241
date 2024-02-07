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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./exercice1.css">
    <title>Exercice1</title>
</head>
<body>
Vous avez visité le site <?= $_SESSION["compteur"] ?> fois.
    <table class="damier">
        <?php
        for($i=0; $i<10; $i++)
        {
        ?>
            <tr>
            <?php
            for($j = 1; $j<=10; $j++)
            {
            ?>
                <td <?= ($i + $j) %2?" class='gris'":"" ?>><?= $i*10 + $j ?></td>
            <?php
            }
            ?>
            </tr>
        <?php
        }
        ?>
        <?php
        // for($i=0; $i<10; $i++)
        // {
        //     echo "<tr>";
        //     for($j=1; $j<=10; $j++)
        //     {
        //         echo "<td";
        //         if(($i + $j) %2 ==0 )
        //         {
        //             echo " class='gris'";
        //         }
        //         echo ">".$i*10 + $j."</td>";
        //     }
        //     echo "</tr>";
        // }
        ?>
    </table>
</body>
</html>