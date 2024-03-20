<?php

function criptografar($mensagem) {
    $mensagem = str_rot13($mensagem);
    $mensagem = strrev($mensagem);
    $tamanho = strlen($mensagem);
    $metade = intval($tamanho / 2);
    for ($i = $metade; $i < $tamanho; $i++) {
    $mensagem[$i] = chr(ord($mensagem[$i]) - 1);
    }
    
    return $mensagem;
    }
    $casos_teste = intval(fgets(STDIN));
    for ($i = 0; $i < $casos_teste; $i++) {
    
    $linha = rtrim(fgets(STDIN));
    $linha_crip = criptografar($linha);
    
    echo $linha_crip . "\n";
    }