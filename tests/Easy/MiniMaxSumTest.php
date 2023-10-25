<?php
namespace Tests\Easy;

use App\Easy\MiniMaxSum;
use PHPUnit\Framework\TestCase;

class MiniMaxSumTest extends TestCase
{
    public function testSumFourOfTheFiveIntegers() 
    {        
        $result = MiniMaxSum::miniMaxSum([1, 3, 5, 7, 9]);
        $expected = 16 . ' ' . 24;
        $this->assertEquals($expected, $result);        
    }

    public function testSumWithNegativeNumbers() 
    {
        $result = MiniMaxSum::miniMaxSum([-1, -3, -5, -7, -9]);
        $expected = -25 . ' ' . -16;
        $this->assertEquals($expected, $result);
    }

    public function testWithLargeNumbers()
    {
        $result = MiniMaxSum::miniMaxSum([539674108, 549382170, 270968351, 746219035, 140597628]);
        $expected = 1500622257 . ' ' . 2106243664;
        $this->assertEquals($expected, $result);
    }

    public function testWithSameNumbers() 
    {
        $result = MiniMaxSum::miniMaxSum([3, 3, 3, 3, 3]);
        $expected = 9 . ' ' . 9;
        $this->assertEquals($expected, $result);
    }
}