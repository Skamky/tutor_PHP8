<?php

//3.40
class Storage
{
	//3,42
	public function add(string $key , $value)
	{
		if (!is_bool($value) && !is_string($value))
		{
			error_log ("требуется тип string или bool, а не ".gettype($value));
			return false;
		}

		//действия с $key и $value
	}
}