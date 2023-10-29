<?php 
namespace Tests\Easy;

use App\Easy\BirthdayCakeCandle;
use PHPUnit\Framework\TestCase;

class BirthdayCakeCandleTest extends TestCase
{
    public function testIfItHasOneTallestCandle()
    {
        $candles = [4, 3, 2, 1];
        $output = BirthdayCakeCandle::birthdayCakeCandle($candles);
        $expected = 1;
        $this->assertEquals($expected, $output);
    }

    public function testIfItHasTwoTallestCandles()
    {
        $candles = [44, 53, 31, 27, 77, 60, 66, 77, 26, 36];
        $output = BirthdayCakeCandle::birthdayCakeCandle($candles);
        $expected = 2;
        $this->assertEquals($expected, $output);
    }

    public function testWhenEveryCandlesAreEqual()
    {
        $candles = [4, 4, 4, 4];
        $output = BirthdayCakeCandle::birthdayCakeCandle($candles);
        $expected = 4;
        $this->assertEquals($expected, $output);
    }

    
}