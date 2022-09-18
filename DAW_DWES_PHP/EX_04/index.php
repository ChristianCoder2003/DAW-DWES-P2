<?php
    $words = ["Hola", "Caballero", "Triste", "Aun", "Electricidad"];
    //Inicializar la palabra con máxima y mínima longitud como la primera palabra seleccionada.
    $minLength = $words[0];
    $maxLength = $words[0];
    echo "<pre>";
    print_r($words);
    echo "</pre>";
    for ($i = 1; $i < count($words); $i++) {
        /*Mira si la longitud de la palabra de la iteración actual es menor que la longitud de la palabra más corta
        guardada; si lo es, guarda esa palabra como la nueva mínima. Lo mismo con la palabra más larga, mirando si la
        palabra actual es más larga que la longitud de la palabra más larga guardada*/
        if (strlen($words[$i]) <= strlen($minLength)) {
            $minLength = $words[$i];
        } elseif (strlen($words[$i]) >= strlen($maxLength)) {
            $maxLength = $words[$i];
        }
    }
    echo "Palabra con longitud maxima: " . $maxLength . "<br>";
    echo "Palabra con longitud minima: " . $minLength . "<br>";
?>