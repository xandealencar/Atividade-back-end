<?php

while (true) {
    fscanf(STDIN, "%d %d %d %d", $H1, $M1, $H2, $M2);
    
    if ($H1 == 0 && $M1 == 0 && $H2 == 0 && $M2 == 0) {
        break;
    }
    
    $minutos_atuais = $H1 * 60 + $M1;
    $minutos_alarme = $H2 * 60 + $M2;
    
    if ($minutos_alarme > $minutos_atuais) {
        $tempo_restante = $minutos_alarme - $minutos_atuais;
    } else {
        $tempo_restante = 24 * 60 - $minutos_atuais + $minutos_alarme;
    }
    
    echo $tempo_restante . "\n";
}

?>