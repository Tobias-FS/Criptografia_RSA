<?php

$a = 1234;
$b = 54;

function maiorMenor( $a, $b ) {

    if ( $a > $b ) {
        mdc( $a, $b );
    } else 
        mdc( $b, $a );

} 

function mdc( $a, $b ) {

    while( $b != 0 ) {
        $r = $a % $b;

        $a = $b;
        $b = $r;

    }

    echo $a;
}

maiorMenor( $a, $a );
?>