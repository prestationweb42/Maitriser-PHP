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
$ageJoueur1 = 15;
$estUnHommeJoueur1 = true;

// DÉCLARER LES VARIABLES
$nomJoueur2 = "Sophie";
$ageJoueur2 = 19;
$estUnHommeJoueur2 = false;

// DÉFINIR UNE CONSTANTE et la passer en ARGUMENT
define("SEPARATEUR", "-");

// APPELER LES FONCTIONS
separation(SEPARATEUR);
afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
separation(SEPARATEUR);
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
separation(SEPARATEUR);
afficheJoueurPlusVieux($ageJoueur1, $ageJoueur2);
separation(SEPARATEUR);
claculDifferenceAge($ageJoueur1, $ageJoueur2);
separation(SEPARATEUR);
echo "*** Switch Case ***";
separation(SEPARATEUR);
joueurMajeur($ageJoueur1);
separation(SEPARATEUR);
joueurMajeur($ageJoueur2);
separation(SEPARATEUR);

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

// joueur majeur avec Switch Case
function joueurMajeur($ageJoueur)
{
    switch ($ageJoueur) {
        case 19:
            echo "il est majeur";
            break;
        case 18:
            echo "il est tout juste majeur";
            break;
        case 17:
            echo "il est encore mineur";
            break;
        case 16:
        case 15:
        case 14:
        case 13:
            echo "il est mineur";
            break;

        default:
            echo "son âge n'est pas defini";
            break;
    }
}