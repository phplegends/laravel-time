<?php

namespace PHPLegends\TimerLaravel;

class Facade extends \Illuminate\Support\Facades\Facade
{
	protected static function getFacadeAccessor()
	{ 
		return 'time';
	}
}