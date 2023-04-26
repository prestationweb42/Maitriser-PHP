<section class="section__container">
    <article class="get__container">
        <h1>Exercice 1</h1>
        <p>Table de multiplication</p>
        <form action="#" class="form__get" method="post">
            <label for="num">Table de multiplication par :</label>
            <input type="number" name="num" id="num" required>
            <input type="submit" value="Validez">
        </form>
        <?php
                if (isset($_POST["num"])) {
                    $num = $_POST["num"];
                    echo "<div class='response'>";
                    echo $num;
                    echo "</div>";
                }
                ?>

    </article>
    <article class="post__container">
        <h1>Exercice 1</h1>
        <p>Résultats de la multipilication par : <?php
                                                            if (isset($_POST["num"])) {
                                                                echo $num;
                                                            }
                                                            ?></p>
        <?php
                echo "<div class='response'>";
                if (isset($_POST["num"])) {
                    for ($i = 0; $i < 10; $i++) {
                        echo '<p>' . $num . " * " . $i . " = " . $i * $num . '</p>';
                    }
                } else {
                    echo '<p> Saisir une valeur !</p>';
                }
                echo "</div>";
                ?>

    </article>
</section>