<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HTML CSS PHP</title>
</head>

<body>
    <main class="main__container">
        <?php include_once('components/navbar.php') ?>
        <section class="section__container">
            <article class="get__container">
                <h1>HTML CSS PHP - 10 Exercices</h1>

                <h2>Inclusion pages - Cliquez sur un exercice dans le menu</h2>
                <?php
                if (!empty($_GET["page"])) {
                    $pages = scandir('pages');
                    unset($pages['0'], $pages['1']);
                    // print_r($pages);
                    $page = $_GET['page'];
                    if (in_array($page . '.php', $pages)) {
                        include('pages/' . $page . '.php');
                    }
                }
                ?>
            </article>
        </section>

        <?php include_once('components/footer.php') ?>
    </main>
</body>

</html>