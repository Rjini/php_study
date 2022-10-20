<?php
$fruits = [
	'apple' => '사과',
	'banana' => '바나나',
	'strawberry' => '딸기',
	'grape' => '포도',
	'watermelon' => '수박'
];

$fruits2 = $fruits;
$fruits3 = $fruits;

sort($fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

rsort($fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

ksort($fruits2);
echo "<pre>";
print_r($fruits2);
echo "</pre>";

krsort($fruits2);
echo "<pre>";
print_r($fruits2);
echo "</pre>";

asort($fruits3);
echo "<pre>";
print_r($fruits3);
echo "</pre>";

arsort($fruits3);
echo "<pre>";
print_r($fruits3);
echo "</pre>";