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

// DÉCLARER LES VARAIBLES
$nomJoueur1 = "Dan";
$ageJoueur1 = 30;
$estUnHommeJoueur1 = true;

// DÉCLARER LES VARIABLES
$nomJoueur2 = "Sophie";
$ageJoueur2 = 50;
$estUnHommeJoueur2 = false;

// DÉFINIR UNE CONSTANTE et la passer en ARGUMENT
define("SEPARATEUR", "=");

// APPELER LES FONCTIONS
separation(SEPARATEUR);
afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
separation("*");
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
separation("=");
afficheJoueurPlusVieux($ageJoueur1, $ageJoueur2);
separation("*");
claculDifferenceAge($ageJoueur1, $ageJoueur2);
separation("=");

// DÉCLARER LA FONCTION
function afficherJoueur($nom, $age, $homme)
{
    echo "Nom Du joueur : " . $nom;
    echo "<br />";
    echo "age Du joueur : " . $age;
    echo "<br />";
    $age = $age + 1;
    echo "age Du joueur : " . $age;
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
        echo "Le joueur 2 est le plus âgé : " . $ageJoueur1 . " ans";
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


// assignation d'une fonction dans une variable
$text = test(3);
echo '<br>';
echo $text;

function test($c)
{
    $a = 5;
    $b = 10;
    return $a + $b + $c;
}
// la fonction retourne 18