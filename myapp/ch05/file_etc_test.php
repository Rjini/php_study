<?php
$filename = "text.txt";
echo filesize($filename)."<br/>";

$path = "/gost022/www/njh/myapp/ch05/text.txt";
echo basename($path, '.txt')."<br/>";
echo dirname($path)."<br/>";