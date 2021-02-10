<html>
    <head>
        <title>teste php</title>
    </head>
    <body>
        <?php
        $temperatura = 0;
        echo '<h1>a temperatura é de '. $temperatura .'º<h1>';
        if ($temperatura<=3) {
            echo 'dia gelado';
        }
        elseif ($temperatura > 3 && $temperatura <=15) {
            echo 'dia frio';
        }
        elseif ($temperatura>15 and $temperatura<=29) {
            echo 'dia agradavel';
        }
        else {
            echo '...começa a ficar demasiado calor';
        }
        ?>
     </body>
</html>