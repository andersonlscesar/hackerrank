<?php
namespace Tests\Easy;

use App\Easy\DiagonalDifference;
use PHPUnit\Framework\TestCase;

class DiagonalDifferenceTest extends TestCase
{
    public function testDiagonalDifference()
    {
        $arr = [
            [1, 2, 3],
            [4, 5, 6],
            [9, 8, 9],
        ];
        $diagonalDifference = new DiagonalDifference();
        $r = $diagonalDifference->diagonalDifference($arr);
        $this->assertSame(2, $r);

    }
}