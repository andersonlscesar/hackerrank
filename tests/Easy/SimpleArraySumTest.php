<?php 
namespace Test\Easy;

use App\Easy\SimpleArraySum;
use PHPUnit\Framework\TestCase;

class SimpleArraySumTest extends TestCase 
{
    public function test_if_sum_array_of_int()
    {
        $sum = SimpleArraySum::simpleArraySum([5,5,-5]);
        $this->assertEquals(5, $sum);
    }

    public function test_if_return_an_int()
    {
        $sum = SimpleArraySum::simpleArraySum([1,1,1]);
        $this->assertIsInt( $sum );
    }
}