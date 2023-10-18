<?php
namespace App\Easy;

class DiagonalDifference
{
    public static function diagonalDifference( array $arr ): int
    {
        $diagonalA = 0;
        $diagonalB = 0;
        $arrSize = count($arr);

        for ( $i = 0; $i < count($arr); $i++) {
            $diagonalA += $arr[$i][$i];
            $diagonalB += $arr[$i][$arrSize - $i - 1];
        }

        return abs( $diagonalA - $diagonalB );
    }
}

$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9],
];

$r = DiagonalDifference::diagonalDifference( $arr );
print $r;