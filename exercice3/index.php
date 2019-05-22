<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3</title>
    </head>
    
    <body>
        
        <?php
        $i = 100;
        $random = 347;
        
        while ($i >= 10) {
            echo ($i * $random); ?>
        <p></p>
        <?php
            $i--;
        }
        ?>
    </body>
</html>