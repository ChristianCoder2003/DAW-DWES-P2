<?php
    declare(strict_types=1);
    $number = 7;
    /*Con el bucle for(), iteramos desde el número 2 hasta la mitad del número indicado (ya que dividiendo por un número
    mayor daría decimal siempre), y miramos si el residuo es 0; si lo es, no es un número primo, ya que sería un divisor*/
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            echo "$number no es un numero primo";
            break;
        } else if ($i == floor($number / 2)) {
            echo "$number es un numero primo";
            break;
        }
    }