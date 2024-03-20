<?php

function decifra_cesar($mensagem, $deslocamento) {
    $decifrado = '';
    $tamanho = strlen($mensagem);
    for ($i = 0; $i < $tamanho; $i++) {
        $char = $mensagem[$i];
        if (ctype_upper($char)) {
            $posicao = ord($char) - ord('A');
            $nova_posicao = ($posicao - $deslocamento + 26) % 26;
            $decifrado .= chr($nova_posicao + ord('A'));
        } else {
            $decifrado .= $char;
        }
    }
    return $decifrado;
}

$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $mensagem = trim(fgets(STDIN));
    $deslocamento = intval(fgets(STDIN));
    
    echo decifra_cesar($mensagem, $deslocamento) . "\n";
}

?>