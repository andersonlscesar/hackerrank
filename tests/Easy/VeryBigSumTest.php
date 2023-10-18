<?php
namespace Tests\Easy;

use App\Easy\VeryBigSum;
use PHPUnit\Framework\TestCase;

class VeryBigSumTest extends TestCase
{

    public function test_if_sum_array()
    {
        $a = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];
        $result = VeryBigSum::aVeryBigSum($a);
        $this->assertEquals(5000000015, $result);
    }
}