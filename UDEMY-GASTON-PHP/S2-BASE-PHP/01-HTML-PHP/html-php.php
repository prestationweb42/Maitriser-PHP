<?php
$nomJoueur1 = "Dan";
$ageJoueur1 = 30;
$estUnHommeJoueur1 = true;
echo "Nom du joueur 1 : " . $nomJoueur1;
echo "<br>";
echo "Age du joueur 1 : " . $ageJoueur1 . " ans";
echo "<br>";
$ageJoueur1 = $ageJoueur1 + 1;
echo "Age du joueur 1 : " . $ageJoueur1 . " ans";
echo "<br>";
if ($estUnHommeJoueur1 === true) {
    echo "C'est un homme";
} else {
    echo "C'est une femme";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formation PHP</title>
</head>

<body>
    <p>------------HTML--------------</p>
    <h1>Formation PHP</h1>
    <h2>Affichage du PHP dans du HTML</h2>
    <P>Nom du joueur :&nbsp;<span><?= $nomJoueur1 ?></span></P>
    <P>Age du joueur :&nbsp;<span><?= $ageJoueur1 ?></span></P>
    <P>Genre du joueur :&nbsp;<span><?php if ($estUnHommeJoueur1 === true) {
                                        echo "C'est un homme";
                                    } else {
                                        echo "C'est une femme";
                                    } ?></span></P>
    <p>Autre manière d'afficher le genre du joueur :</p>
    <P>Genre du joueur :&nbsp;
        <span>
            <?php if ($estUnHommeJoueur1 === true) { ?>
            <p>C'est un hommme</p>
            <?php } else { ?>
            <p>C'est une femme</p>
            <?php } ?>
        </span>
    </P>
</body>

</html>