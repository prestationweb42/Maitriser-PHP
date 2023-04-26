<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HTML CSS PHP</title>
</head>

<body>
    <main class="main__container">
        <header class="header__container">
            <a href="#"><img src="img/php-logo.png" class="header__logo" alt="logo booki" /></a>
            <nav class="header__nav__bar">
                <ul class="header__nav__list">
                    <li class="header__nav__item">
                        <a href="Exo2/exo2.php" class="header__nav__link">Exo2</a>
                    </li>
                    <li class="header__nav__item">
                        <a href="#activities__container" class="header__nav__link">Activités</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="section__container">
            <article class="get__container">
                <h1>HTML CSS PHP</h1>
                <p>Formulaire Méthode GET</p>
                <form action="#" class="form__get" method="get">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" required>
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" required>
                    <input type="submit" value="Envoyez">
                </form>
                <?php
                if (isset($_GET["nom"]) && isset($_GET["age"])) {
                    $nom = $_GET["nom"];
                    $age = $_GET["age"];
                    echo "<div class='response'>";
                    echo $nom . ", " . $age . " ans";
                    echo "</div>";
                }
                ?>
            </article>
            <article class="post__container">
                <h1>HTML CSS PHP</h1>
                <p>Formulaire Méthode POST</p>
                <form action="#" class="form__post" method="post">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" required>
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" required>
                    <input type="submit" value="Envoyez">
                </form>
                <?php
                if (isset($_POST["nom"]) && isset($_POST["age"])) {
                    $nom = $_POST["nom"];
                    $age = $_POST["age"];
                    echo "<div class='response'>";
                    echo $nom . ", " . $age . " ans";
                    echo "</div>";
                }
                ?>
            </article>
        </section>
    </main>
</body>

</html>