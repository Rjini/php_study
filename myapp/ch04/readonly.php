<?php
class Example
{
	public readonly string $str;
	
	public function say(string $str) {
		$this -> say = $str;
	}
}

$str = "Hello World";
$example = new Example();
$example -> say(str: "Hello World");
$example -> say(str: "PHP");