<?php
    $words = ["Hola", "Caballero", "Triste", "Aun", "Electricidad"];
    $minLength = $words[0];
    $maxLength = $words[0];
    echo "<pre>";
    print_r($words);
    echo "</pre>";
    for ($i = 1; $i < count($words); $i++) {
        if (strlen($words[$i]) <= strlen($minLength)) {
            $minLength = $words[$i];
        } elseif (strlen($words[$i]) >= strlen($maxLength)) {
            $maxLength = $words[$i];
        }
    }
    echo "Palabra con longitud maxima: " . $maxLength . "<br>";
    echo "Palabra con longitud minima: " . $minLength . "<br>";
?>
