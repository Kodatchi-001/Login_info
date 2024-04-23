<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/style_affiche.css">
</head>

<body>
    <?php
    $affiche = new PDO('mysql:host=localhost;dbname=information;port=3306;charset=utf8', 'root', '555663kdt');
    
    $contenu = $affiche -> query('select * from util');
    echo "<table>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Prenom</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    
    while ($Lighne = $contenu->fetch()) {
        echo "<tr>";
        echo "<td>";
        echo $Lighne['Nom'];
        echo "</td>";
        echo "<td>";
        echo $Lighne['Prenom'];
        echo "</td>";
        echo "<td>";
        echo $Lighne['Email'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    ?>
</body>

</html>