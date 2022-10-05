<?php
trait Dog
{
	public string $type;
	public string $name;
	public int $age;
	
	public function describe()
	{
		echo "{$this -> type}의 이름은 {$this -> name}입니다. {$this -> age}살 입니다. <br/>";
	}
}

trait Say
{
	abstract public function greet();
}

class Animal
{
	use Dog, Say;
	
	public function greet()
	{
		echo "멍멍~ 안녕하세요. <br/>";
	}
}

$animal = new Animal();
$animal -> type = "강아지";
$animal -> name = "담이";
$animal -> age = 6;

$animal -> describe();
$animal -> greet();