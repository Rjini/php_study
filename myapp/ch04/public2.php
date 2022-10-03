<?php
class Example {
	var $property = 'property';
	
	var function myFunc()
	{
		return 'Hello World';
	}
}

$example = new Example();

echo $example -> property;
echo "<br/>";
echo $example -> myFunc();