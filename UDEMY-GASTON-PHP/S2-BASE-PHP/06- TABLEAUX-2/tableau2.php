<?php
// fonction séparation
function separation($sep)
{
    echo "<br />";
    for ($i = 0; $i < 30; $i++) {
        echo $sep;
    }
    echo "<br />";
}


// déclarer ce joueur dans un tableau associatif
$joueur1 = [
    "nom" => "Dan",
    "age" => 15,
    "estUnHomme" => true
];
echo "<pre>";
var_dump($joueur1);
echo "</pre>";

// déclarer ce joueur dans un tableau associatif
$joueur2 = [
    "nom" => "Sophie",
    "age" => 19,
    "estUnHomme" => false
];
echo "<pre>";
print_r($joueur2);
echo "</pre>";

// APPELER LES FONCTIONS
separation("-");
afficherJoueur($joueur1["nom"], $joueur1["age"], $joueur1["estUnHomme"]);
separation("-");
afficherJoueur($joueur2["nom"], $joueur2["age"], $joueur2["estUnHomme"]);
separation("-");
// afficheTableauFor($joueur1);
// separation("-");
// afficheTableauFor($joueur2);
// separation("-");
afficheTableauForeach($joueur1);
separation("-");
afficheTableauForeachIndice($joueur1);

// DÉCLARER LA FONCTION
function afficherJoueur($nom, $age, $homme)
{
    echo "Nom du joueur : " . $nom;
    echo "<br />";
    echo "age du joueur : " . $age;
    echo "<br />";

    // if ($homme === true) {  -> OU
    if ($homme) {
        echo "C'est un homme";
    } else { //$estUnHomme === false
        echo "C'est une femme";
    }
}


// Fonction afficher un tableau avec For
/**
 * Attention - la boucle for
 * ne fonctionne pas avec un tableau associatif
 */
function afficheTableauFor($tab)
{
    $nbCaseTableau = count($tab);
    for ($i = 0; $i < $nbCaseTableau; $i++) {
        echo $tab[$i] . "<br />";
        // echo $tab[$i];
    }
};

// Fonction afficher un tableau avec Foreach
function afficheTableauForeach($tab)
{
    foreach ($tab as $i) {
        echo $i . "<br />";
    }
};

// Fonction afficher un tableau avec Foreach et son indice
function afficheTableauForeachIndice($tab)
{
    foreach ($tab as $indice => $val) {
        echo $indice . " : " . $val . "<br />";
    }
};


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLEAUX ASSOCIATIFS</title>
</head>

<body>
    <h1>HTML - TABLEAUX ASSOCIATIFS</h1>
    <a href="img/Tableaux.png">TABLEAUX</a>
    <div>
        <table>
            <tr>
                <?php afficheTableauForeach($joueur1); ?>
                <td> toto</td>
                <td> toto</td>
                <td> toto</td>
                <td> toto</td>
            </tr>
        </table>
    </div>

</body>

</html>