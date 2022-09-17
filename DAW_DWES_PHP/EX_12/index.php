<?php
    declare(strict_types=1);
    $number = 7;
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            echo "$number no es un numero primo";
            break;
        } else if ($i == floor($number / 2)) {
            echo "$number es un numero primo";
            break;
        }
    }
