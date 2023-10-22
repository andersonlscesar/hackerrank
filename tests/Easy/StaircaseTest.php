<?php
namespace Tests\Easy;

use App\Easy\Staircase;
use PHPUnit\Framework\TestCase;

class StaircaseTest extends TestCase
{
public function testStaircaseWithThreeSteps() {
    $output = Staircase::staircase(3);
    $this->assertSame("  #\n ##\n###\n", $output);
    }
}