<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./demo.css">
</head>
<body>
    <table>
    <?php
    for($i=1; $i<=10; $i++)
    {
        echo "<tr>";
        for($j=1; $j<=10; $j++)
        {
            echo "<td";
            if(($j+$i) % 2==0) echo " class='gris'";
            echo ">".$i*$j."</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>