<?php
function ordenarvalores($valores) {
    $pares = [];
    $impares = [];
 
 
    foreach ($valores as $valor) {
     if ($valor % 2 == 0) {
         $pares[] = $valor;
     } else {
         $impares[] = $valor;
     }
    }
 
    sort($pares);
    rsort($impares);
 
    $ordenados = array_merge($pares, $impares);
 
    return $ordenados;
 }
 
 function ordenarEntrada() {
     $n = intval(fgets(STDIN));
     $valores = [];
 
     for ($i = 0; $i < $n; $i++) {
         $valores[] = intval(fgets(STDIN));
     }
 
     $ordenados = ordenarvalores($valores);
     
 }