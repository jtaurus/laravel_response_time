<?php namespace jtauri\ResponseTimer\Tests;

use PHPUnit_Framework_TestCase;
use jtauri\ResponseTimer\Services\Timer;

class TimerTest extends PHPUnit_Framework_TestCase{
	public function testBasicFunction()
	{
		$this->assertEquals("lol", "lol");
	}
	public function testTimerGetsInstantiated()
	{
		$this->assertInstanceOf("jtauri\ResponseTimer\Services\Timer", new Timer);
	}
	public function testTimeReturnedByTimerIsNotNull()
	{
		$this->assertNotNull(Timer::getMilliseconds());
	}
	public function testTimerTimesProperly()
	{
		$startTime = Timer::getMilliseconds();
		usleep(10000);
		$endTime = Timer::getMilliseconds();
		$this->assertEquals("10", $endTime-$startTime);
		$startTime = Timer::getMilliseconds();
		usleep(20000);
		$endTime = Timer::getMilliseconds();
		$this->assertEquals("20", $endTime-$startTime);		
	}
}