<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
    </head>

    <body>
        
        <?php
        $i = 1;
        
        while ($i <= 10) {
            echo $i;
            $i += $i / 2;
            ?>
        <p></p>
        <?php
        }
        ?>
    </body>

</html>