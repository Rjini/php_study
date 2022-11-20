<?php
$filename = "text.txt";
echo filesize(filename: $filename)."<br/>";

$path = "/gost022/www/njh/myapp/ch05/text.txt";
echo basename(path: $path, suffix: '.txt')."<br/>";
echo dirname(path: $path)."<br/>";