<?php
namespace Test\Easy;

use PHPUnit\Framework\TestCase;
use App\Easy\SolveMeFirst;

class SolveMeFirstTest extends TestCase
{
    public function test_if_sum()
    {   
        $s = new SolveMeFirst();
        $sum = $s->sum(5, -4);
        $this->assertEquals(1, $sum);
    }

    public function test_if_return_int()
    {
        $s = new SolveMeFirst();
        $sum = $s->sum(5, 5);
        $this->assertIsInt( $sum );
    }
}