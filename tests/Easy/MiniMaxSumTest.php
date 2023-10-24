<?php
namespace Tests\Easy;

use App\Easy\MiniMaxSum;
use PHPUnit\Framework\TestCase;

class MiniMaxSumTest extends TestCase
{
    public function testSumFourOfTheFiveIntegers() 
    {
        ob_start();
        MiniMaxSum::miniMaxSum([1, 3, 5, 7, 9]);
        $output = ob_get_clean();
        $this->expectOutputString($output);
    }
}