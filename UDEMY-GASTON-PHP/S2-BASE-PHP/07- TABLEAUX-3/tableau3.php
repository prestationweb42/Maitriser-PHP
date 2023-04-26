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

// déclarer ce joueur dans un tableau associatif
$joueur2 = [
    "nom" => "Sophie",
    "age" => 19,
    "estUnHomme" => false
];

// déclarer ce joueur dans un tableau multi dimension
$joueur3 = [
    "nom" => ["Dan", "Vent"],
    "age" => 50,
    "estUnHomme" => true
];
// déclarer ce joueur dans un tableau associatif multi dimension
$joueur4 = [
    "nom" => ["prenom" => "Sophie", "nom" => "Darel"],
    "age" => 35,
    "estUnHomme" => false
];


// APPELER LES FONCTIONS
separation("-");
afficherJoueur($joueur1["nom"], $joueur1["age"], $joueur1["estUnHomme"]);
separation("-");
afficherJoueur($joueur2["nom"], $joueur2["age"], $joueur2["estUnHomme"]);
separation("-");
afficheTableauForeach($joueur1);
separation("-");
afficheTableauForeach($joueur2);
separation("-");
afficheTableauForeachIndice($joueur3);
separation("-");
afficheTableauForeachIndice($joueur4);

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
        // cette condition empêche l'erreur mais n'affiche pas le tableau 'nom'
        if (!is_array($val)) {
            echo $indice . " : " . $val . "<br />";
            // il faut rajouter une autre condition pour parcourir le tableau nom
        } else {
            // mais en utilisant la variable de chaque ligne ici $val
            // foreach ($val as $indice => $subVal) {
            // echo $subVal . "<br />";
            // }
            // OU RAPPELER LA FONCTION ELLE-MEME
            afficheTableauForeachIndice($val);
        }
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
    <h1>HTML - TABLEAUX MULTI DIMENSION</h1>
    <a href="img/Tableaux.png">TABLEAUX</a>
    <div>
        <table>
            <tr>
                <th> Titre</th>
                <th> Titre</th>
                <th> Titre</th>
                <th> Titre</th>
            </tr>
            <tr>
                <td> toto</td>
                <td> toto</td>
                <td> toto</td>
                <td> toto</td>
            </tr>
        </table>
    </div>

</body>

</html>