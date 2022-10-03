<?php
interface Animal
{
	public function animal_type($type);
}

class Cat implements Animal
{
	public function animal_type($type)
	{
		echo "{$type} 입니다.<br/>";
	}
}

$cat = new Cat;
$cat -> animal_type("고양이");