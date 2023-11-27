<?php
namespace Tests\Easy;

use PHPUnit\Framework\TestCase;
use App\Easy\GradingStudent;

class GradingStudentTest extends TestCase
{
    public  function testWithTheSameGrade()
    {
        $expected = [33, 33, 33, 33];
        $output = GradingStudent::gradingStudent( [33, 33, 33, 33] );
        $this->assertEquals( $expected, $output );

    }
}