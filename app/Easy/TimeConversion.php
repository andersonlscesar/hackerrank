<?php
namespace App\Easy;

class TimeConversion{
    
    public static function timeConversion( $s ): string
    {
        $time12 = strtoupper( $s );
        $time24 = date('H:i:s', strtotime( $time12 ) );
        return $time24;
    }
}


$time = TimeConversion::timeConversion("12:01:00AM");
print $time;