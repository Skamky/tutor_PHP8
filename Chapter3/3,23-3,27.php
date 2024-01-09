<?php
//листинг 3.38
declare(strict_types=1);

//листинг 3.23

namespace Chapter3;
class  AdressManager
{
	private $addresses = ["209.131.36.159", "216.58.213.174"];
	//листинг 3.26

	/**Вывести список адресов.
	 * Если переменная $resolve содержит значения true, то адрес преобразуеться в эквивалентное имя хоста
	 * @param $resolve Boolean Преоброзовать адрес?
	 * @return void
	 */
	public function outputAddresses(bool $resolve) // 3.36
	{
		//листинг 3.27 (использовалась до версии php7
		if (!is_bool($resolve)) {
			//принять решительные меры}
		}
		// листинг  3.25 (нежелательный код)
		if (is_string($resolve)) {
			$resolve = (preg_match("/^(false|no|off)$/i", $resolve)) ? false : true;
		}
		foreach ($this->addresses as $address) {
			print $address;
			if ($resolve) {
				print "(" . gethostbyaddr($address) . ")";
			}
			print  "\n";
		}

	}
}

//листинг 3.24
$settings = simplexml_load_file(__DIR__ . "/resolve.xml");
$manager  = new AdressManager();
$manager->outputAddresses((string)$settings->resolvedomains);

//листинг 3,37
$manager->outputAddresses("false"); //будет преобразованно в "false"===true
// листинг 3,38
$manager->outputAddresses("false"); //будет преобразованно в "false"===true (см первую строку)
