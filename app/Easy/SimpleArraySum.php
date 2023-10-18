<?php
namespace App\Easy;

class SimpleArraySum
{
    /**
     * @param array $a 
     * @return int 
     * 
     */
    public static function simpleArraySum( array $a ): int 
    {
        $sum = 0;
        
        foreach ($a as $num) {
            $sum += $num;
        }

        return $sum;
    }
}

$sum = SimpleArraySum::simpleArraySum([3, 3, 3]);
var_dump($sum);