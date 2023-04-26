<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les conditions en PHP</title>
</head>

<body>
    <h1>Les conditions en PHP</h1>
    <h2>Condition if</h2>
    <?php
    $x = 20;
    $y = 30;
    if ($x != $y) {
        echo "x est inférieur à y";
    } else {
        echo "x est supérieur à y";
    }
    echo "<br>";
    // note de classe
    $note = 4;
    if ($note >= 15) {
        echo $note . " /20 c'est très bien";
    } elseif ($note >= 12) {
        echo $note . " /20 c'est bien";
    } elseif ($note >= 9) {
        echo $note . " /20 c'est moyen";
    } elseif ($note >= 5) {
        echo $note . " /20 niveau insuffisant, il faut travailler";
    } else {
        echo $note . " /20 niveau nul, il faut travailler";
    }
    echo "<br>";
    ?>
    <form method="POST">
        <div>
            <label for="data">Indiquez votre âge :</label>
            <input type="number" name="data" id="data" value="<?= $text; ?>" min="10" max="50" step="1">
        </div>
        <div>
            <label for="dataCheck">Cochez la case si vous êtes adhérent : </label>
            <input type="checkbox" name="dataCheck" id="dataCheck">
        </div>
        <input type="submit" name="submit" value="Envoyez">
    </form>

    <?PHP
    // plusieurs conditions
    if (isset($_POST["data"]) && (isset($_POST["dataCheck"]))) {
        $age = $_POST["data"];
        if ($age >= 21) {
            echo "Vous êtes bien adhérent et votre age de <u>" . $age . "</u> ans est supérieur à <u>21</u> ans, vous pouvez bénéficiez d'une réduction de 20%.";
        } else {
            echo "Vous êtes bien adhérent et votre age de " . $age . " ans est inférieur à <u>21</u> ans, vous bénéficiez d'une réduction de 50%";
        }
    } else {
        echo "Vous n'êtes pas adhérent et ne pouvez donc pas bénéficier pas d'une réduction.";
    }
    echo "<br>";
    ?>
</body>

</html>