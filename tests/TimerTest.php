<?php

use PHPLegends\TimerLaravel\Time;

class TimerTest extends PHPUnit_Framework_TestCase
{
	public function testCollectionMethod()
	{
		$format = Time::collection([10, 20, 30])->sum()->format('%h:%i:%s');

		$this->assertEquals('00:01:00', $format);
	}

    public function testMakeMethod()
    {

        $time = Time::make(23, 59, 58);

        $this->assertEquals(
            '23:59:58',
            $time->format()
        );
    }

    public function testDefaultformat()
    {
        $format = '%h hours %i minutes %s seconds';

        $times = Time::collection([10, 29, 40], $format);

        $parser = new \WallaceMaxters\Timer\Parser;

        foreach($times as $time)
        {
            $this->assertTrue(
                $parser->isValidFormat($format, $time->format())
            );
        }

        $total = $times->sum()->format();

        $this->assertTrue(
            $parser->isValidFormat($format, $total)
        );
    }
}
