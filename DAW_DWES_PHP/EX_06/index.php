<?php
    $length = 10;
    /*El primer bucle for() anidado marca los triángulos crecientes, incrementando el número de asteriscos de uno en uno
    según el número de fila, y separando los triángulos con espacios (&nbsp), que decrecen de 4 en 4 según la fila en la
    que estamos (2 &nbsp = 1 *, y por cada fila se pintan 2 asteriscos más, por lo tanto 4 espacios menos)*/
    for($i = 1; $i <= $length; $i++) {
        for($j = 0; $j < $i; $j++) {
            echo "*";
        }
        for($k = 0; $k < ($length - $i) * 4; $k++) {
            //Se usa el &nbsp ya que en html no se pueden poner muchos espacios seguidos (solo se muestra uno)
            echo "&nbsp";
        }
        for($l = 0; $l < $i; $l++) {
            echo "*";
        }
        echo "<br>";
    }
    /*El segundo bucle for() anidado dibuja los dos triangulos decrecientes, pintando 1 asterisco menos por fila, y
    creciendo 2 espacios (4 &nbsp) por fila*/
    for($i = 1; $i <= $length - 1; $i++) {
        for($j = $length; $j > $i; $j--) {
            echo "*";
        }
        for($k = 0; $k < $i * 4; $k++) {
            echo "&nbsp";
        }
        for($l = $length; $l > $i; $l--) {
            echo "*";
        }
        echo "<br>";
    }
?>