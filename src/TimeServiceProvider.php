<?php

namespace PHPLegends\TimerLaravel;

use Illuminate\Support\ServiceProvider;

class TimeServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->package('phplegends/timer-laravel', 'timer');
	}

    public function register()
    {
        $this->app->bind('time', function()
        {
            return new Time();
        });
    }
}