<?php

namespace PHPLegends\TimerLaravel;

use WallaceMaxters\Timer\Collection;

class Time extends \WallaceMaxters\Timer\Time
{
	public static function make($hours = 0, $minutes = 0, $seconds = 0)
	{
		return Time::create($hours, $minutes, $seconds);
	}
	
	/**
	* @param array $times
	* @param string $format
	* @return \WallaceMaxters\Timer\Collection
	*/
	public static function collection(array $times = [], $format = self::DEFAULT_FORMAT)
	{
		return Collection::create($times, $format);
	}
}

