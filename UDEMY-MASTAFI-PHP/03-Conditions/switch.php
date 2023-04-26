<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Instruction Switch en PHP</title>
</head>

<body>
    <h1>L'instruction switch</h1>
    <form method="post">
        <div>
            <label for="num">Indiquez votre âge : </label>
            <input type="number" name="data" id="num" min="0" max="20">
        </div>
        <input type="submit" name="submit" id="submit">
    </form>
    <?php
    if (isset($_POST["data"])) {
        $note = $_POST["data"];
    }
    // echo $note;

    switch ($note) {
        case 20:
            echo "Vous avez une note : " . $note . " /20, félicitation du jury";
            break;
        case ($note >= 18):
            echo "Vous avez une note : " . $note . " /20, très bien";
            break;
        case ($note >= 15):
            echo "Vous avez une note : " . $note . " /20, bien";
            break;
        case ($note >= 10):
            echo "Vous avez une note : " . $note . " /20, assez bien";
            break;
        default:
            echo "Vous avez une note : " . $note . " /20, vous n'avez pas la moyenne pour réussir le concours";
    }
    ?>
</body>

</html>