<?php
declare(strict_types=1);
$wordToCompare = "HOLA";

function IsStringUpperCase(String $word):bool {
    return strtoupper($word) == $word;
}
//json_encode sirve para mostrar como texto el resultado booleano de IsStringUpperCase()
echo "Todos los carácteres de la palabra  \"$wordToCompare\" están en mayúsculas?: "
    . json_encode(IsStringUpperCase($wordToCompare));