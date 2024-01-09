<?php

namespace Chapter4;
//4.1
class StaticExample
{
	public static int $aNum =0;
	public static function  sayHello():void
	{
		print "Здравствуй, Мир!";
	}
}
// 4.2
print StaticExample::$aNum;
StaticExample::sayHello();