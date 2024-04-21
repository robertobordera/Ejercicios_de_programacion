/*
* Escribe una función que reciba dos palabras (String) y retorne
* verdadero o falso (Bool) según sean o no anagramas.
* - Un Anagrama consiste en formar una palabra reordenando TODAS
* las letras de otra palabra inicial.
* - NO hace falta comprobar que ambas palabras existan.
* - Dos palabras exactamente iguales no son anagrama.
*/

<?php
function esAnagrama(string $palabra1, string $palabra2)
{
    $palabraArray = [];
    $palabraArray2 = [];

    if (strlen($palabra1) == strlen($palabra2) && $palabra1 != $palabra2) {
        for ($i = 0; $i < strlen($palabra1); $i++) {
            array_push($palabraArray, $palabra1[$i]);
        }

        for ($i = 0; $i < strlen($palabra2); $i++) {
            array_push($palabraArray2, $palabra2[$i]);
        }

        $coincidencias = array_intersect($palabraArray, $palabraArray2);
        $valorNuevo = implode($coincidencias);

        if ($valorNuevo != $palabra1 && $valorNuevo != $palabra2) {
            echo "No es anagrama";
            return false;
        }
        
        echo "Son anagrama"
        return true;
    } else {
        echo "No son anagrama";
        return false;
    }
}

$final = esAnagrama("amot", "roma");
