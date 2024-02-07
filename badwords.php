<?php
    $paragraph = trim($_GET["paragraph"]);
    $word = trim($_GET["censuredWord"]);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-badwords</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <h2 class="text-center mb-5">
            Risultato
        </h2>

        <div class="container text-center">
            <div>
                <?php
                echo $paragraph;
                echo "<br><br>";
                echo "Lunghezza del paragrafo pari a :".strlen($paragraph);
                ?>
            </div>
            
            <div>
                <?php
                echo str_replace($word, '***', $paragraph);
                echo "<br><br>";
                echo "La lunghezza del paragrafo censurato con la parola: ".$word." è di: ".strlen(str_replace($word, '***', $paragraph));
                ?>
            </div>
        </div>

    </body>
</html>