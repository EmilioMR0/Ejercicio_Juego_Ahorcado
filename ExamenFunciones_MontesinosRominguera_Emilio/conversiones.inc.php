<?php
function binarioDecimal($numero){
    $numeroPosiciones = count_chars($numero);
    for($i = $numeroPosiciones; $i >= 0; --$i){
        for($i = 0; $i <= $numero; $i++){
            $numeroDecimal = $numero[$i] * pow(2,$numeroPosiciones);
        }
    }
    return $numeroDecimal;
}
function decimalBinario($numero){

    // La idea es ir guardando el cociente para que no siempre se realice la misma operación, a parte de guardar el resto para posteriormente mostrar el número en binario.
    // Lo he estado intentando pero se me ha quedado así mi último intento
    $restos[0] = $numero % 2;
    $cociente = $numero / 2;
    while($numero / 2 != 1){
        $i++;
        $restos[$i] = $cociente % 2;
        $nuevoCociente = $cociente / 2;
    }
}
?>