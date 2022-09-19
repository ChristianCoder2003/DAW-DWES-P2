<?php
$columns = 9;
$direction = 0;
triangle($columns, $direction);

function triangle($columns, $direction) {
    for ($i = 1; $i < $columns/2 + 1; $i++) {
        if ($direction == 0) {
            for ($j = 0; $j < $i - 1; $j++) {
                echo '&nbsp&nbsp';
            }
            for ($k = $columns; $k > ($i - 1) * 2 ; $k--) {
                echo '*';
            }
        } elseif ($direction == 1) {
            for ($j = 0; $j < $columns/2 - $i; $j++) {
                echo '&nbsp&nbsp';
            }
            for ($k = 0; $k <= ($i - 1) * 2; $k++) {
                echo '*';
            }
        }

        echo '<br>';
    }
}
