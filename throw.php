<?php

function multiply($a, $b) {
    // Long form
    // $x = $a * $b;
    // if ( $x < 0 ) {
    //     throw new Exception( "The result is negative." );
    // } else {
    //     return $x;
    // }

    // Ternary version
    return (( $a * $b ) > 0 ) ? $a * $b : throw new Exception("The result is a negative number.");
}

try {
    echo multiply(-8, 4);
} catch( Exception $e ) {
    echo $e->getMessage();
}

// we don't need to close php code. 