<?php
    $par = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus unde maiores facere quidem minima minus inventore reiciendis, ipsa fugit aliquam tenetur labore odit vel necessitatibus. Obcaecati cum harum dolores possimus!";

    $parola_da_censurare = $_GET['parola'];

    $par_modificato = str_replace($parola_da_censurare, '***', $par);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="parola">
        <button type="submit">censura</button>
    </form>

    <h2>Paragrafo Originale</h2>
    <p>
        <?php echo $par; ?>
    </p>
    <h4>Lunghezza Paragrafo originale: <?php echo strlen($par); ?></h4>
    <hr>
    <h2>Paragrafo censurato</h2>
    <p>
        <?php echo $par_modificato; ?>
    </p>
    <h4>Lunghezza Paragrafo originale: <?php echo strlen($par_modificato); ?></h4>
</body>
</html>