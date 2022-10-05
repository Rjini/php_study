<?php
class MyClass
{
	public static $message = "Hello World";
	
	public static function say()
	{
		return self::$message;
	}
}

echo MyClass::say();