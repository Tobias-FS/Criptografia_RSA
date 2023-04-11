<?php

function fatoracaoFermat( int $n ){ // Retorna dois fatores (p e q) de um número.
    $fatores = [];
    $isPar = false;
    
    $fatorX = 0;
    $fatorY = 0;

    if($n%2 == 0){
        $isPar = true;
    }

    $isPrimo = false;

    if( $isPar == true ){
        $fatorX = $n/2;
        $fatorY = 2;
    } else {
        $x = floor(sqrt($n));
        $y = 0;
        $floorY = 1;

        if( $x*$x == $n ){
            $fatorX = $x;
            $fatorY = $x;
        } else {
            $isPrimo = true;
            while($y != $floorY && $isPrimo){
                $x++;
                $y = sqrt(($x*$x) - $n);
                $floorY = floor($y);
                $isPrimo = ($y != $floorY);
            }
        }
        $fatorX = (int) ($x - $y);
        $fatorY = (int) ($x + $y);
    }

    if( $isPrimo == true){
        $fatores = [ 'fatorX' => 1, 'fatorY' => $n ];
    } else {
        $fatores = [ 'fatorX' => $fatorX, 'fatorY' => $fatorY ];
    }
    return $fatores;
}

var_dump( fatoracaoFermat( 1342127 )  );

?>