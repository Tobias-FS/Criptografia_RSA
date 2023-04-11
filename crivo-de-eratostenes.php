<?php

function crivoDeEratóstenes( $a ) {
   
    if( $a % 2 == 0 ){
        $a--;
    }

    $n = $a;
    $primos = [];
    $impares = [];
    $qtd = ( $n + 1 ) / 2;
    $p = 3;
    array_push( $impares, 2 );

    for ( $i = 1; $i < $qtd; $i++ ){
        array_push($impares, 1);
    }

    while( $p*$p <= $n){                                                                                                                                                                        
        if( $impares[($p-1)/2] != 0){
            $t = $p*$p;
            while( $t <= $n ){
                $impares[($t-1)/2] = 0; 
                $t = $t + 2 * $p;
            }
        }
        $p = $p + 2;
    }

    array_push($primos, 2);
    $contador = 1;

    foreach( $impares as $chave => $valor ){
        if( $valor == 1 ){
            array_push( $primos, (2 * $chave + 1) );
            $contador++;
        }
    }

    //echo "Primos até " . $a . "\n";
    //print_r( $primos );
    //echo "Total de primos até " . $a . ": " . $contador;

    return $primos;

}

$res = crivoDeEratóstenes( 100 );

echo '[ ';
foreach ( $res as $p ) {

    echo "$p, ";

}
echo ']', PHP_EOL;

?>