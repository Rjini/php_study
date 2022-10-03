<?php
class Example {
	public $property = 'property';
	
	public function myFunc()
	{
		return 'Hello World';
	}
}

$example = new Example();

echo $example -> property;
echo "<br/>";
echo $example -> myFunc();