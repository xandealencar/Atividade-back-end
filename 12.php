<?php

$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    list($F1, $F2) = explode(' ', trim(fgets(STDIN)));
    while ($F2 % $F1 != 0) {
        $temp = $F1;
        $F1 = $F2 % $F1;
        $F2 = $temp;
    }
    echo $F1 . "\n";
}

?>