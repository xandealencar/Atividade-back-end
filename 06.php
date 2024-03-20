<?php

$X = intval(fgets(STDIN));
$Y = intval(fgets(STDIN));

$menor = ($X < $Y) ? $X : $Y;
$maior = ($Y > $X) ? $Y : $X;

$soma_impares = 0;

for ($i = $menor; $i <= $maior; $i++) {
    if ($i % 2 != 0) {
        $soma_impares += $i;
    }
}

echo $soma_impares . "\n";

?>