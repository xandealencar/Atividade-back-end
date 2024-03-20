<?php

function ledsNecessarios($numero) {
    $leds = array(6, 2, 5, 5, 4, 5, 6, 3, 7, 6);
    $total_leds = 0;
    for ($i = 0; $i < strlen($numero); $i++) {
        $digito = intval($numero[$i]);
        $total_leds += $leds[$digito];
    }
    return $total_leds;
}

$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $valor = trim(fgets(STDIN));
    echo ledsNecessarios($valor) . " leds\n";
}

?>