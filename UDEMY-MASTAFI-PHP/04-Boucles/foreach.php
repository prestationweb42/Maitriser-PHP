<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Boucle Foreach en PHP</title>
</head>

<body>
    <h1>Boucle Foreach</h1>
    <h2>Boucle Foreach</h2>
    <h2>Avec la boucle For</h2>
    <?php
    $pays = ['France', 'Espagne', 'Algérie', 'Tunisie', 'Italie'];
    $lengthPays = count($pays);
    for ($i = 0; $i < $lengthPays; $i++) {
        echo "<p>$pays[$i]</p>";
    };
    ?>

    <h2>Avec la boucle Foreach</h2>
    <?php
    foreach ($pays as $el) {
        echo "<p>$el</p>";
    }

    ?>
    <h2>La boucle foreach et un tableau associatif</h2>
    <?php
    $utilisateurs = array(
        'nom' => 'Vent',
        'prenom' => 'Dan',
        'age' => 57,
        'ville' => 'Lyon',
        'code postal' => 69600
    );
    foreach ($utilisateurs as $key => $utilisateur) {
        echo "<p>Votre $key est $utilisateur</p>";
    }
    ?>
    <h2>Avec la fonction print_r</h2>
    <?php
    echo "
    <pre>";
    print_r($utilisateurs);
    echo "</pre>";
    ?>
</body>

</html>