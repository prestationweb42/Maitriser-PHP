<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tableau associatif en PHP</title>
</head>

<body>
    <h1>Tableau associatif</h1>
    <p>Fonctionne sur le même principe que le tableau numéroté sauf que la clé aura un nom unique défini
        manuellement pour chaque valeur.
    </p>
    <h2>3 méthodes pour créer un tableau associatif</h2>
    <p>1 - Avec la commande array et print_r pour exploiter les valeurs</p>
    <?php
    $user = array(
        'nom' => 'Vent',
        'prenom' => 'Dan',
        'age' => 57,
        'ville' => 'Roanne'
    );
    echo "<pre>";
    print_r($user);
    echo "</pre>";
    ?>
    <p>2 - Avec les crochets (comme JS)</p>
    <?php
    $user = [
        'nom' => 'Vent',
        'prenom' => 'Dan',
        'age' => 57,
        'ville' => 'Roanne',
        'code postal' => 42300,
    ];
    echo "<pre>";
    print_r($user);
    echo "</pre>";
    ?>
    <p>3 - En créant le tableau indice par indice et valeur par valeur (voir video udemy)</p>
</body>

</html>