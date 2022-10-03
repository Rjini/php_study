<?php
class Example {
	protected $property = 'property';
	
	protected function myFunc()
	{
		return 'Hello World';
	}
}

$example = new Example();

echo $example -> property;
echo "<br/>";
echo $example -> myFunc();