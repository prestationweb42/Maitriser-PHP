<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les opérateurs en PHP</title>
</head>

<body>
    <h1>Les opérateurs en PHP</h1>
    <h2>1 - Les Opérateurs arithmétiques</h2>
    <!-- ////////////// -->
    <table>
        <caption>Les opérateurs arithmétiques</caption>
        <thead>
            <tr>
                <th>Opérateurs</th>
                <th>Opération associée</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="left">+</td>
                <td>Addition</td>
            </tr>
            <tr>
                <td class="left">-</td>
                <td>Soustraction</td>
            </tr>
            <tr>
                <td class="left">*</td>
                <td>Multiplication</td>
            </tr>
            <tr>
                <td class="left">/</td>
                <td>Division</td>
            </tr>
            <tr>
                <td class="left">%</td>
                <td>Modulo - Reste de la division enclidienne</td>
            </tr>
            <tr>
                <td class="left">**</td>
                <td>Puissance</td>
            </tr>
        </tbody>
    </table>
    <!-- ////////////// -->
    <h2>2 - Combinaison des opérateurs avec l'opérateur d'affectation =</h2>
    <table>
        <caption>Combinaison des opérateurs arithmétiques</caption>
        <thead>
            <tr>
                <th>Opérateurs</th>
                <th>Définition</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="left">+=</td>
                <td>Additionne puis affecte le résultat</td>
            </tr>
            <tr>
                <td class="left">-=</td>
                <td>Soustrait puis affecte le résultat</td>
            </tr>
            <tr>
                <td class="left">*=</td>
                <td>Multiplie puis affecte le résultat</td>
            </tr>
            <tr>
                <td class="left">/=</td>
                <td>Divise puis affecte le résultat</td>
            </tr>
            <tr>
                <td class="left">%=</td>
                <td>Calcul le modulo puis affecte le résultat</td>
            </tr>
            <tr>
                <td class="left">**=</td>
                <td>Élève à la puissance puis affecte le résultat</td>
            </tr>
            <tr>
                <td class="left">.=</td>
                <td>Concatène puis affecte le résultat</td>
            </tr>
        </tbody>
    </table>
    <?php
    $x = 10;
    $y = 2;
    print $x += $y;
    echo "<br>";
    print $x += 6;
    echo "<br>";
    print $x -= 6;
    echo "<br>";
    print $x = $x ** $y;
    echo "<br>";
    print $x .= ' $';
    ?>
    <!-- ////////////// -->
    <h2>3 - Les opérateurs de comparaison</h2>
    <table>
        <caption>Les opérateurs de comparaison</caption>
        <thead>
            <tr>
                <th>Opérateurs</th>
                <th>Définition</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="left"><?php echo "<"; ?></td>
                <td>Inférieur strictement</td>
            </tr>
            <tr>
                <td class="left"><?php echo ">"; ?></td>
                <td>Supérieur strictement</td>
            </tr>
            <tr>
                <td class="left"><?php echo "<="; ?></td>
                <td>Inférieur ou égale</td>
            </tr>
            <tr>
                <td class="left"><?php echo ">="; ?></td>
                <td>Supérieur ou égale</td>
            </tr>
            <tr>
                <td class="left"><?php echo "=="; ?></td>
                <td>Pour tester l'égalité en termes de valeurs</td>
            </tr>
            <tr>
                <td class="left"><?php echo "==="; ?></td>
                <td>Pour tester l'égalité en terme de valeurs et de types</td>
            </tr>
            <tr>
                <td class="left"><?php echo "!="; ?></td>
                <td>Pour tester la différence en terme de valeurs</td>
            </tr>
            <tr>
                <td class="left"><?php echo "<>"; ?></td>
                <td>Pour tester la différence en terme de valeurs</td>
            </tr>
            <tr>
                <td class="left"><?php echo "!=="; ?></td>
                <td>Pour tester la différence en terme de valeurs ou en types</td>
            </tr>
        </tbody>
    </table>
    <?php
    $a = 10;
    $b = "10";
    $x = 20.0;
    $y = 20;
    var_dump($x > $y);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    var_dump($a == $b);
    echo "<br>";
    var_dump($a === $b);
    echo "<br>";
    var_dump($a !== $b);
    echo "<br>";
    var_dump($a != $b);
    echo "<br>";
    echo ($x === $y);

    ?>
</body>

</html>