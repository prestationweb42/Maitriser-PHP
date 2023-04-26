<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les fonctions en PHP</title>
</head>

<body>
    <h1>Les fonctions</h1>
    <form method="post">
        <div>
            <label for="num1">Nombre 1</label>
            <input type="number" name="num1" id="num1">
        </div>
        <div>
            <label for="num2">Nombre 2</label>
            <input type="number" name="num2" id="num2">
        </div>
        <input type="submit" value="Envoyez">
    </form>
    <?php
    if (isset($_POST["num1"]) && isset($_POST["num2"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
    }
    function addition($n1, $n2)
    {
        return $n1 + $n2;
    }
    echo addition($num1, $num2);
    ?>
</body>

</html>