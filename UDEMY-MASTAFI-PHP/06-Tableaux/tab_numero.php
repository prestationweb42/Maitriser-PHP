<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tableau numéroté en PHP</title>
</head>

<body>
    <h1>Tableau numéroté en PHP</h1>
    <p>Dans un tableau, chaque valeur est associée à une clé unique numérique définie par défaut ou manuellement</p>
    <h2>3 méthodes pour créer un tableau numéroté</h2>
    <p>1 - Avec la commande array et print_r</p>
    <?php
    $pays = array('France', 'Espagne', 'Maroc', 'Algérie', 'Italie');
    echo "<pre>";
    print_r($pays);
    echo "</pre>";
    ?>
    <p>2 - Avec les crochets (comme JS)</p>
    <?php
    $Pays = ['France', 'Espagne', 'Maroc', 'Algérie', 'Italie'];
    echo "<pre>";
    print_r($Pays);
    echo "</pre>";
    ?>
    <p>3 - En créant le tableau indice par indice et valeur par valeur (voir video udemy)</p>


</body>

</html>