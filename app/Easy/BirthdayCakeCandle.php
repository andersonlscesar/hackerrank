<?php
namespace App\Easy;

class BirthdayCakeCandle
{
    public static function birthdayCakeCandle( array $candles )
    {
        $tallestCandles = 0;
        $sumOfTallestCandles = 0;

        foreach ( $candles as $candle ) {
            if ( $tallestCandles < $candle) $tallestCandles = $candle;            
        }

        foreach ( $candles as $candle) {
            if ($tallestCandles === $candle ) $sumOfTallestCandles++;
        }

        return $sumOfTallestCandles;
    }
}

$candles = [44, 53, 31, 27, 77, 60, 66, 77, 26, 36];

BirthdayCakeCandle::birthdayCakeCandle( $candles );