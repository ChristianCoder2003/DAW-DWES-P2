<?php
    $length = 10;
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = 0; $i < $length; $i++) {
        for ($k = $length; $k > $i; $k--) {
            echo "*";
        }
        echo "<br>";
    }
?>
