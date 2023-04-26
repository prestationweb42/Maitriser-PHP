<section class="section__container">
    <article class="get__container">
        <h1>Exercice 4</h1>
        <p>Trouver le nombre choisi par l'ordinateur</p>
        <form action="#" class="form__init" method="post">
            <label for="rayon">Réinitialiser :</label>
            <input type="hidden" name="reinit" value="yes">
            <input type="submit" value="Réinitialiser">
        </form>
        <form action="#" class="form__get" method="post">
            <label for="rayon">Quel est le chiffre :</label>
            <input type="number" name="chiffre" id="chiffre" required>
            <input type="submit" value="Validez">
        </form>
        <?php
        // Session
        session_start();
        if (!isset($_SESSION['chiffreAleatoire'])) {
            $_SESSION['chiffreAleatoire'] = rand(0, 50);
        }
        //
        if (isset($_POST["chiffre"]) && $_POST["chiffre"] > 0) {
            $chiffre = $_POST["chiffre"];
            echo "<div class='response'>";
            echo $chiffre;
            echo "</div>";
        } else {
            echo "<div class='response'>";
            echo 'Attention c\'est une valeur négative';
            echo "</div>";
        }
        ?>

    </article>
    <article class="post__container">
        <h1>Exercice 4</h1>
        <p>Trouver le nombre choisi par l'ordinateur : <?php
                                                        if (isset($_POST["chiffre"])) {
                                                            echo $chiffre;
                                                        } else {
                                                            echo 'Saisir une valeur';
                                                        }
                                                        ?></p>
        <?php
        echo "<div class='response'>";
        if (isset($_POST["reinit"]) && $_POST["reinit"] === "yes") {
            $_SESSION['chiffreAleatoire'] = rand(0, 50);
        }
        $chiffreAlea = $_SESSION['chiffreAleatoire'];
        echo $_SESSION['chiffreAleatoire'];

        if (isset($_POST["chiffre"]) && $_POST["chiffre"] > 0) {
            $chiffre = intval($_POST['chiffre']);
            if ($chiffreAlea === $chiffre) {
                echo '<p> C\'est gagné !</p>';
            } else {
                if ($chiffreAlea > $chiffre) {
                    echo '<p> Le chiffre est supérieur !</p>';
                } else {
                    echo '<p> Le chiffre est inférieur !</p>';
                }
            }
        } else {
            echo '<p> Saisir une valeur !</p>';
        }
        echo "</div>";
        ?>

    </article>
</section>