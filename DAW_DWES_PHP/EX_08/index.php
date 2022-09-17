<?php
    declare(strict_types=1);
    $base = 5;
    $height = 10;
    function triangleArea(int|float $base, int|float $height): float|int {
        return ($base * $height)/2;
    }
    echo "Base: $base | Altura: $height <br>";
    echo "Area: " . triangleArea($base, $height);
?>
