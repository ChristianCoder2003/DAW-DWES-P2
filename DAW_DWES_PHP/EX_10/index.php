<?php
declare(strict_types=1);

$array = [3 => "Chris", 4 => "Sergio", 2 => "Fran", 5 => "Alex", 1 => "Hugo"];

echo "Array inicial: ";
echo printArray($array) . "<br><br>";

function sortArray(array $arrayToOrder, string $order, string $sortingElement): array {
    if ($sortingElement == "Clave" && $order == "Ascendiente") {
        ksort($arrayToOrder, SORT_NUMERIC);
    } elseif ($sortingElement == "Clave" && $order == "Descendiente") {
        krsort($arrayToOrder, SORT_NUMERIC);
    } elseif ($sortingElement == "Valor" && $order == "Ascendiente") {
        sort($arrayToOrder);
    } elseif ($sortingElement == "Valor" && $order == "Descendiente") {
        rsort($arrayToOrder);
    } else {
        echo "Error: El orden debe ser \"Ascendiente\" o \"Descendiente\", y el elemento de ordenacion debe ser \"Clave\" o \"Valor\"";
    }
    return $arrayToOrder;
}


$array = sortArray($array, "Ascendiente", "Clave");
echo "Array ordenado por Clave Ascendiente: ";
echo printArray($array) . "<br><br>";

$array = sortArray($array, "Descendiente", "Clave");
echo "Array ordenado por Clave Descendiente: ";
echo printArray($array) . "<br><br>";

$array = sortArray($array, "Ascendiente", "Valor");
echo "Array ordenado por Valor Ascendiente: ";
echo printArray($array) . "<br><br>";

$array = sortArray($array, "Descendiente", "Valor");
echo "Array ordenado por Valor Descendiente: ";
echo printArray($array) . "<br>";

// He creado este método para poder mostrar de forma fácil la información del array.
function printArray($array):void {
    foreach ($array as $item) {
        echo "| $item | ";
    }
}
?>
