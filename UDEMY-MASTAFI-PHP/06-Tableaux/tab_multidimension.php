<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tableau multidimensionnel en PHP</title>
</head>

<body>
    <h1>Tableau multidimensionnel en PHP</h1>
    <p>Un tableau multidimensionnel est un tableau qui contient d'autres tableaux en VALEUR.
    </p>
    <p>Exemple avec ce tableau qui est bi-dimensionnel, numéroté et qui contient 4 éléments numérotés et chaque élément
        est un tableau numéroté
    </p>
    <img src="img/TableauMultidimension.png" alt="">
    <h2>3 méthodes pour créer un tableau associatif</h2>
    <p>1 - Avec la commande array et ligne par ligne, print_r pour exploiter les valeurs</p>
    <?php
    $pays = array();
    $pays[0][0] = 'France';
    $pays[0][1] = 'Paris';
    $pays[0][2] = 80;
    $pays[1][0] = 'Canada';
    $pays[1][1] = 'Ottawa';
    $pays[1][2] = 38;
    $pays[2][0] = 'Maroc';
    $pays[2][1] = 'Rabat';
    $pays[2][2] = 40;
    $pays[3][0] = 'Espagne';
    $pays[3][1] = 'Madrid';
    $pays[3][2] = 47;

    echo "Le nombre d'habitant du Canada est : " . $pays[1][2];
    echo "<br>";
    echo "--------------------";
    echo "<br>";
    // avec une boucle for
    for ($i = 0; $i < 3; $i++) {
        echo $pays[2][$i] . "<br>";
    }
    echo "--------------------";
    echo "<br>";
    // avec une boucle for
    for ($i = 0; $i < count($pays); $i++) {
        echo $pays[$i][0] . "<br>";
    }
    echo "<br>";
    echo "--------------------";
    echo "<pre>";
    print_r($pays);
    echo "</pre>";

    echo "--------------------";
    $pays2 = array();
    $pays2['ligne0']['pays'] = 'Paris';
    $pays2['ligne0']['capital'] = 'France';
    $pays2['ligne0']['population'] = 80;
    $pays2['ligne1']['pays'] = 'Canada';
    $pays2['ligne1']['capital'] = 'Ottawa';
    $pays2['ligne1']['population'] = 38;
    $pays2['ligne2']['pays'] = 'Maroc';
    $pays2['ligne2']['capital'] = 'Rabat';
    $pays2['ligne2']['population'] = 40;
    $pays2['ligne3']['pays'] = 'Espagne';
    $pays2['ligne3']['capital'] = 'Madrid';
    $pays2['ligne3']['population'] = 47;

    echo "<pre>";
    print_r($pays2);
    echo "</pre>";
    ?>
    <p>2 - Avec les crochets (comme JS)</p>
    <p>3 - En créant le tableau indice par indice et valeur par valeur (voir video udemy)</p>
</body>

</html>