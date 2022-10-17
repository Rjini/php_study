<?php
$str = "hello gnuWiz.com";

echo strtoupper($str)."<br/>";
echo strtolower( $str)."<br/>";
echo ucfirst($str)."<br/>";
echo ucwords($str)."<br/>";
echo lcfirst($str)."<br/>";

$str2 = strtr($str, "hello", "Welcome");
echo $str2."<br/>";

$replace_pairs = [
	'hello' => 'Welcome',
	'gnuWiz' => 'php',
	'com' => 'co.kr'
];

$str3 = strtr($str, $replace_pairs);
echo $str3."<br/>";