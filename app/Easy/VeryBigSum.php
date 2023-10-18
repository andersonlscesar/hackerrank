<?php
namespace App\Easy;

class VeryBigSum
{
    public static function aVeryBigSum(array $ar): int
    {
        $sum = 0;
        foreach ( $ar as $v) {
            $sum += $v;
        }

        return $sum;
    }

}