<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <div style="border: 1px solid">
            <?php
            $countries = ["ESP" => ["Name" => "España", "Code" => "710"],
                "AND" => ["Name" => "Andorra", "Code" => "020"],
                "ECU" => ["Name" => "Ecuador", "Code" => "218"],
                "BGR" => ["Name" => "Bulgaria", "Code" => "100"],
                "BRA" => ["Name" => "Brazil", "Code" => "076"],
                "GAB" => ["Name" => "Gabon", "Code" => "266"],
                "CAN" => ["Name" => "Canada", "Code" => "124"],
                "JAM" => ["Name" => "Jamaica", "Code" => "388"],
                "COG" => ["Name" => "Andorra", "Code" => "178"],
                "CPV" => ["Name" => "Cabo Verde", "Code" => "132    "]
            ];
            //En el bucle foreach, cada país ($country) lo asociamos a su nombre con la variable $name y al código con $code
            foreach ($countries as $country => ["Name"=> $name, "Code"=> $code]) {
                echo "El pais " . $name . " utiliza el codigo alfa-3 " . $country . " con codigo numerico: " . $code . "<br>";
            }
            ?>
        </div>
    </body>
</html>
