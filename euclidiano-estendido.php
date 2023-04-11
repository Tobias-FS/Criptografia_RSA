<?php

function mdc( &$a, &$b ) {

    $A = max( $a, $b );
    $B = min( $a, $b );
    $t = [];

    $t[ 0 ] = [ 'r' => $A, 'q' => '', 'x' => 1, 'y' => 0,  ];
    $t[ 1 ] = [ 'r' => $B, 'q' => '', 'x' => 0, 'y' => 1,  ];

    $i = 2;
    

    if ( $A % $B === 0 ) {
        
        if ( $B === $A  ) {
            $q = intval( $A / $B );
            $x = 2;
            $y = -1;

            return $t[ $i ] = [ 'r' => $b, 'q' => $q, 'x' => $x, 'y' => $y ];
        }
            
        $q = intval( $A / $B );
        $x = 1 - $q;
        $y = 1;

        $t[ $i ] = [ 'r' => $b, 'q' => $q, 'x' => $x, 'y' => $y ];

        if ( $a < $b) {
            $aux = $t[ $i ][ 'x' ];
            $t[ $i ][ 'x' ] = $t[ $i ][ 'y' ];
            $t[ $i ][ 'y' ] = $aux;
            $t[ $i ][ 'r' ] = $a;

            return $t[ $i ];
        }

        return $t[ $i ];
        

    } else {

        while( $B != 0 ) {
            
                $r = $A % $B;
                $q = intval( $A / $B );
                
                $x = $t[ $i - 2  ][ 'x' ] - ( $q * $t[ $i - 1  ][ 'x' ] );
                $y = $t[ $i - 2  ][ 'y' ] - ( $q * $t[ $i - 1  ][ 'y' ] );

                    
                $t[ $i ] = [ 'r' => $r, 'q' => $q, 'x' => $x, 'y' => $y ];

                $A = $B;
                $B = $r;

                $i++;
            }
    }

    if ( $a < $b ) {
        echo 'chegou';
        $aux = $t[ $i - 2][ 'x' ];
        $t[ $i - 2][ 'x' ] = $t[ $i - 2][ 'y' ];
        $t[ $i - 2][ 'y' ] = $aux;
    }

    return $t[ $i -2 ];
}

$a = 10;
$b = 10;



$resp = mdc( $a, $b );

var_dump( $resp );
?>