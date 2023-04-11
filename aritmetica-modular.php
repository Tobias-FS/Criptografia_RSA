<?php 



function congruencia( int $a, int $n, $m ) {

    $potenciacao = [];

    $potenciacao []= 1;

    for ( $i = 1; $i < $m; $i++ ) {
		$anterior = $potenciacao[ $i - 1 ];
		$potenciacao []= mod( $anterior * mod( $a, $m), $m );	
	}

    return $potenciacao;
    
}

function mod( int $x, int $m ) {
		
    $modulo = ( $m + ( $x % $m ) ) % $m;
    if( $modulo > ( $m / 2 ) ) {
        $modulo = $modulo - $m;
    }
    return $modulo;
}

// $a = 2351;
// $n = 2;

// $a = 50121;
// $n = 13;

// $a = 321677;
// $n = 14;

$a = 2;
$i = 10;
$m = 8;

// echo mod( $a, $n ), PHP_EOL;
$res =  congruencia( $a, $i, $m );

echo '[ ';
foreach ( $res as $p ) {

    echo "$p, ";

}
echo ']', PHP_EOL;

?>