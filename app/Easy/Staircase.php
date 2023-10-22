<?php
namespace App\Easy;

class Staircase
{
    public static function staircase( $n )
    {
        $output = "";
    
        // for ( $i = 1; $i <= $n; $i++ ) {

        //     for ( $space = 1; $space <= ($n - $i); $space++ ) {
        //         $output .= " ";
        //     }

        //     for ( $hash = 1; $hash <= $i; $hash++ ) {
        //         $output .= '#';
        //     }

        //     $output .= "\n";
        // }

        for ($i = 1; $i <= $n; $i++) {
            $output .= str_repeat(" ", ($n - $i)) . str_repeat("#", $i) . PHP_EOL;
        }

        return $output;
        
    }
}

Staircase::staircase(6);