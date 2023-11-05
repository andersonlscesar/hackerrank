<?php
namespace Tests\Easy;

use PHPUnit\Framework\TestCase;
use App\Easy\TimeConversion;

class TimeConversionTest extends TestCase 
{
    public function testTimeConversionToAM()
    {
        $time = TimeConversion::timeConversion("12:01:00AM");
        $expected = "00:01:00";
        $this->assertEquals($expected, $time);
    }

    public function testTimeConversionPM()
    {
        $time = TimeConversion::timeConversion("12:01:00PM");
        $expexted = "12:01:00";
        $this->assertEquals($expexted, $time);
    }

    public function testTimeConversionToAMithSeconds()
    {
        $time = TimeConversion::timeConversion("12:01:48AM");
        $expected = "00:01:48";
        $this->assertEquals($expected, $time);
    }

    public function testTimeConversionPMWithSeconds()
    {
        $time = TimeConversion::timeConversion("07:05:45PM");
        $expexted = "19:05:45";
        $this->assertEquals($expexted, $time);
    }
}