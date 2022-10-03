<?php
class Example {
	private $property = 'property';
	
	private function myFunc()
	{
		return 'Hello World';
	}
}

$example = new Example();

echo $example -> property;
echo "<br/>";
echo $example -> myFunc();