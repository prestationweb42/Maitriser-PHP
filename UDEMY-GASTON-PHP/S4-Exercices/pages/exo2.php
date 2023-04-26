<section class="section__container">
    <article class="get__container">
        <h1>Exercice 2</h1>
        <p>Affichage d'une pyramide</p>
        <form action="#" class="form__get" method="post">
            <label for="hauteur">Hauteur de la pyramide</label>
            <input type="number" name="hauteur" id="hauteur" required>
            <input type="submit" value="Validez">
        </form>
        <?php
        if (isset($_POST["hauteur"]) && $_POST["hauteur"] > 0) {
            $hauteur = $_POST["hauteur"];
            echo "<div class='response'>";
            echo $hauteur;
            echo "</div>";
        } else {
            echo "<div class='response'>";
            echo 'Attention c\'est une valeur négative';
            echo "</div>";
        }
        ?>

    </article>
    <article class="post__container">
        <h1>Exercice 2</h1>
        <p>Résultats de la pyramide par : <?php
                                            if (isset($_POST["hauteur"])) {
                                                echo $hauteur;
                                            } else {
                                                echo 'Saisir une valeur';
                                            }
                                            ?></p>
        <?php
        echo "<div class='response'>";
        if (isset($_POST["hauteur"]) && $_POST["hauteur"] > 0) {
            $txt = "";
            for ($i = 0; $i < $hauteur; $i++) {
                $txt .= "xx";
                echo $txt . '<br />';
            }
            for ($i = 0; $i < $hauteur - 1; $i++) {
                $txt = substr($txt, 0, strlen($txt) - 2);
                echo $txt . '<br />';
            }
        } else {
            echo '<p> Saisir une valeur !</p>';
        }
        echo "</div>";
        ?>

    </article>
</section>