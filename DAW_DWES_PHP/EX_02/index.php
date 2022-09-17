<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <ul>
            <?php
                $classMates = ["Alex", "Chris", "Esther", "Pol", "Sergio", "Nil"];
                    foreach ($classMates as $name) {
                        echo "<li>" . $name . "</li>";
                    }
            ?>
        </ul>
        <?php echo "En total hay " . count($classMates) . " compañeros en clase"?>
    </body>
</html>
