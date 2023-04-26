<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Opération ternaire</title>
</head>

<body>
    <h1>L'opération ternaire</h1>
    <form method="post">
        <div>
            <label for="num">Indiquez votre âge : </label>
            <input type="number" name="data" id="num" min="0" max="80" value="18">
        </div>
        <input type="submit" name="submit" id="submit">
    </form>
    <?php
    if (isset($_POST["data"])) {
        $age = $_POST["data"];
        if ($age >= 18) {
            echo "Vous avez " . $age . " ans et vous êtes majeur.";
        } else {
            echo "Vous avez " . $age . " ans et vous êtes mineur.";
        }
    }
    ?>
    <h2>Avec l'opérateur ternaire</h2>
    <?php
    echo $age >= 18 ? "Vous avez <u>" . $age . "</u> ans et vous êtes majeur." : "Vous avez <u>" . $age . "</u> ans et vous êtes mineur.";
    ?>
</body>

</html>