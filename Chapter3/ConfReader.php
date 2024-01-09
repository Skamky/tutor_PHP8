<?php

// Листинг 3.39
namespace Chapter3;
class ConfReader
{
	public function getValues(array $defult = null)
	{
		$values = [];
		//выполнить действия для получения новых значений
		// добавить переданные значения
		//результат всегда являеться массивом
		$values = array_merge($defult, $values);
		return $values;
	}

}