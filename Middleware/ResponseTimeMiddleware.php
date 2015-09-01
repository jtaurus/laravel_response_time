<?php namespace jtauri\ResponseTimer\Middleware;

use Closure;
use jtauri\ResponseTimer\Timer;

class ResponseTimeMiddleWare{
	public function handle($request, Closure $next)
	{

		$timeStart = Timer::getMilliseconds();
		$response = $next($request);
		$timeEnd = Timer::getMilliseconds();
		$response->headers->set("X-Response-Time", $timeEnd-$timeStart);
		return $response;
	}
}