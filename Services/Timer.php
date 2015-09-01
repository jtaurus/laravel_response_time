<?php namespace jtauri\ResponseTimer\Services;

class Timer{

	public static function getMilliseconds()
	{
		return round(microtime() * 1000, true);
	}
	
}