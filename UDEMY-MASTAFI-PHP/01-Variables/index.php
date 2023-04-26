<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PHP Les variables</title>
</head>

<body>
    <h1>Premiers pas en PHP</h1>
    <h2>Les variables</h2>
    <?php
    echo "Je m'apelle Dan";
    echo "<br>";
    echo 'Je m\'apelle Dan';
    echo "<br>";
    // les variables
    $nom = "Vent";
    $prenom = "Dan";
    $age = 57;
    $jour = false;
    $prix = 4.485;
    print 'Je m\'apelle <strong>' . $nom . ' ' . $prenom . '</strong> et j\'ai : ' . $age;
    echo "<br>";
    print 'Je m\'apelle Dan et j\'ai <i><strong>' . $age . '</strong></i> ans';
    echo "<br>";
    print 'Je m\'apelle Dan et j\'ai <strong>' . $age . '</strong> ans';
    echo "<br>";
    print 'Je m\'apelle Dan et j\'ai <i><strong><mark>' . $age . '</mark></strong></i> ans';
    ?>
    <h2>Types de variables</h2>
    <p>Le type d'une variable s'obtient avec la fonction gettype()</p>
    <?php
    echo "<p>la variable <u>nom</u> est de type : <strong>" . gettype($nom) . "</strong></p>";
    echo "<br>";
    echo "<p>la variable <u>prenom</u> est de type : <strong>" . gettype($nom) . "</strong></p></p>";
    echo "<br>";
    print "<p>la variable <u>age</u> est de type : <strong>" . gettype($age) . '</strong></p>';
    echo "<br>";
    print "<p>la variable <u>jour</u> est de type : <strong>" . gettype($jour) . '</strong></p>';
    echo "<br>";
    print "<p>la variable <u>$prix</u> est de type : <strong>" . gettype($prix) . '</strong></p>';
    ?>
    <h2>Les constantes</h2>
    <p>Une constante est un identifiant (un nom) qui représente une valeur simple. <br>Comme son nom le suggère, cette
        valeur ne peut jamais être modifiée durant l'exécution du script (sauf les constantes magiques __FILE__, etc).
        <br>Les
        constantes sont sensibles à la casse. Par convention, les constantes sont toujours en
        <strong>majuscule</strong>.
    </p>
    <?PHP
    define("CAPITAL", "Paris");
    echo "<br>";
    print CAPITAL;
    echo "<br>";
    print __FILE__;
    ?>
</body>

</html>