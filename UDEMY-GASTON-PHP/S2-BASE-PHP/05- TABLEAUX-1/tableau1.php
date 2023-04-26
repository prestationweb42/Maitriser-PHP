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

// DÉCLARER LES VARIABLES pour un joueur
// $nomJoueur1 = "Dan";
// $ageJoueur1 = 15;
// $estUnHommeJoueur1 = true;
// déclarer ce même joueur dans un tableau numéroté
$joueur1 = ["Dan", 15, true];


// DÉCLARER LES VARIABLES
// $nomJoueur2 = "Sophie";
// $ageJoueur2 = 19;
// $estUnHommeJoueur2 = false;
// déclarer ce même joueur dans un tableau numéroté
$joueur2 = ["Sophie", 19, false];

// DÉFINIR UNE CONSTANTE et la passer en ARGUMENT
define("SEPARATEUR", "-");

// APPELER LES FONCTIONS
separation(SEPARATEUR);
afficherJoueur($joueur1[0], $joueur1[1], $joueur1[2]);
separation(SEPARATEUR);
afficherJoueur($joueur2[0], $joueur2[1], $joueur2[2]);
separation(SEPARATEUR);
afficheJoueurPlusVieux($joueur1[1], $joueur2[1]);
separation(SEPARATEUR);
claculDifferenceAge($joueur1[1], $joueur2[1]);
separation(SEPARATEUR);
afficheTableauFor($joueur1);
separation(SEPARATEUR);
afficheTableauFor($joueur2);
separation(SEPARATEUR);
afficheTableauForeach($joueur1);
separation(SEPARATEUR);
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

// comparaison des ages des joueurs
function afficheJoueurPlusVieux($ageJoueur1, $ageJoueur2)
{
    if ($ageJoueur1 > $ageJoueur2) {
        echo "Le joueur 1 est le plus âgé : " . $ageJoueur1 . " ans";
    } else {
        echo "Le joueur 2 est le plus âgé : " . $ageJoueur2 . " ans";
    }
}

// calculer la différences des ages des joueurs
function claculDifferenceAge($ageJoueur1, $ageJoueur2)
{
    if ($ageJoueur1 > $ageJoueur2) {
        $result12 = $ageJoueur1 - $ageJoueur2;
        echo "Le joueur 1 est plus agé et la différence est de : " . $result12 . " ans";
    } else {
        $result21 = $ageJoueur2 - $ageJoueur1;
        echo
        "Le joueur 2 est plus agé et la différence est de : " . $result21 . " ans";;
    }
}

// Fonction afficher un tableau avec For
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
    <title>TABLEAUX NUMEROTES</title>
</head>

<body>
    <h1>HTML - TABLEAU NUMÉROTÉ</h1>
    <a href="img/Tableaux.png">TABLEAUX</a>
    <div>
        <table>
            <tr>
                <?php afficheTableauFor($joueur1); ?>
                <td> toto</td>
                <td> toto</td>
                <td> toto</td>
                <td> toto</td>
            </tr>
        </table>
    </div>

</body>

</html>