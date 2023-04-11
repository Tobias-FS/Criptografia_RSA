<?php

$fatores = [];

function getMenorFator( int $n ){
	
    $menorFator = 2;
    
    while ( $menorFator <= $n ) {
        if ( $n % $menorFator == 0) {
            return $menorFator;
        }
        $menorFator++;
    }
    return 0;
    
}

function fatoracao( $num ) {
    
    $n = $num;
		
	$fator = 1;
	$qtd = 0;
	// $parProx = [];
	// $ParAtual = [];
		
		
	while ( $n > 1 ) {
		$qtd++;
		$fator = getMenorFator( $n);
		$ParAtual = [ 'x' => $fator, 'y' => $qtd ];
		$parProx = [ 'x' => getMenorFator( $n / $fator ), 'y' => $qtd ];
		if ( $parProx[ 'x' ] != $ParAtual[ 'x' ] ) {
			$fatores []= $ParAtual;
			$qtd = 0;
		}
		$n = $n / $fator;
			
	}
								
	return $fatores;

}

var_dump( fatoracao( 450 ) );

?>