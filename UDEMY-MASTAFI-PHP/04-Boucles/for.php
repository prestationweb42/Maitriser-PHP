<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Boucle For en PHP</title>
</head>

<body>
    <h1>Boucle While</h1>
    <h2>Boucle For</h2>
    <form method="post">
        <div>
            <label for="data">Entrez un nombre : </label>
            <input type="number" name="data" id="data" min="0" max="20" value="0">
        </div>
        <input type="submit" name="submit" value="Envoyez">
    </form>
    <?php
    if (isset($_POST["data"])) {
        $num = $_POST["data"];
        print $num;
        print "<br>";
    }
    $x = 0;
    // do {
    //     echo "la valeur de la boucle est : " . $x . "<br>";
    //     $x++;
    // } while ($x <= $num);
    for ($i = 0; $i <= $num; $i++) {
        echo "la valeur de la boucle est : " . $x . "<br>";
        $x++;
    }
    ?>
</body>

</html>