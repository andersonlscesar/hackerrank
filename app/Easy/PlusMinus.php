<?php
namespace App\Easy;

class PlusMinus
{
    public static function plusMinus( array $arr )
    {
        $positive = 0;
        $negative = 0;
        $zero = 0;
        $arraySize = count($arr);

        foreach ( $arr as $value ) {
            if ( $value > 0 ) $positive++; 

            if ( $value < 0 ) $negative++;

            if ( $value == 0 ) $zero++;
        }

        $ratioPositive = $positive / $arraySize;
        $ratioNegative = $negative / $arraySize;
        $ratioZero = $zero / $arraySize;

        print number_format( ( float ) $ratioPositive, 6, '.', '') . PHP_EOL;
        print number_format( ( float ) $ratioNegative, 6, '.', '') . PHP_EOL;
        print number_format( ( float ) $ratioZero, 6, '.', '');
    }
}

$arr = [-4, 3, -9, 0, 4, 1];

PlusMinus::plusMinus( $arr );