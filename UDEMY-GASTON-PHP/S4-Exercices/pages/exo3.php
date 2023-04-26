<section class="section__container">
    <article class="get__container">
        <h1>Exercice 3</h1>
        <p>Cercle - Périmètre et Aire</p>
        <form action="#" class="form__get" method="post">
            <label for="rayon">Rayon d'un cercle :</label>
            <input type="number" name="rayon" id="rayon" required>
            <label for="perimetre">Périmètre</label>
            <input type="radio" name="perimetre" id="perimetre">
            <label for="aire">Aire</label>
            <input type="radio" name="aire" id="aire">
            <input type="submit" value="Validez">
        </form>
        <?php
        if (isset($_POST["rayon"]) && $_POST["rayon"] > 0) {
            $rayon = $_POST["rayon"];
            echo "<div class='response'>";
            echo $rayon;
            echo "</div>";
        } else {
            echo "<div class='response'>";
            echo 'Attention c\'est une valeur négative';
            echo "</div>";
        }
        ?>

    </article>
    <article class="post__container">
        <h1>Exercice 3</h1>
        <p>Cercle - Périmètre et Aire : <?php
                                        if (isset($_POST["rayon"])) {
                                            echo $rayon;
                                        } else {
                                            echo 'Saisir une valeur';
                                        }
                                        ?></p>
        <?php
        echo "<div class='response'>";
        if (isset($_POST["rayon"]) && $_POST["rayon"] > 0 && isset($_POST['perimetre']) || isset($_POST['aire'])) {
            $rayon = intval($_POST['rayon']);
            $diametre = $rayon * 2;
            $pi = pi();
            if (isset($_POST['perimetre']) === true) {
                echo "Le périmètre est égal à : <b>" . $pi * $diametre . '</b><br />';
            }
            if (isset($_POST['aire']) === true) {
                echo "L'aire est égal à : <b>" . $pi * $rayon ** 2 . '</b><br />';
            }
        } else {
            echo '<p> Saisir une valeur et cochez Périmètre ou Aire !</p>';
        }
        echo "</div>";
        ?>

    </article>
</section>