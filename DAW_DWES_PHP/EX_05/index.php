<?php
    $length = 10;
    /*El primer bucle for() anidado dibuja el triangulo superior, incrementando el número de * dibujados según la fila en la que
    nos encontramos. $i marca el número de fila en el que estamos, y $j el número de asteriscos que debemos dibujar, que
    depende según el numero de la fila en la que estamos*/
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    //El segundo bucle for() anidado dibuja el triangulo inferior, dibujando al principio tantos asteriscos como longitud
    //hayamos seleccionado y después decrementando uno por uno fila por fila
    for ($i = 0; $i < $length; $i++) {
        for ($k = $length; $k > $i; $k--) {
            echo "*";
        }
        echo "<br>";
    }
?>
